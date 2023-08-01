<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\SlotTiming;
use App\Models\BookAppointment;
use Hash;
use Auth;
use DataTables;
use Session;
use Artisan;
class AuthenticationController extends Controller
{
    public function show_login(){
    	return view("admin.login");
    }

    public function post_login(Request $request)
    {
    	$getuser = User::where("email",$request->get("email"))->first();
        if($getuser){
           if(Hash::check($request->get("password"), $getuser->password)){
                    Auth::login($getuser);

                    if($request->get("rem_me")==1){
                        setcookie('email', $request->get("email"), time() + (86400 * 30), "/");
                        setcookie('password',$request->get("password"), time() + (86400 * 30), "/");
                        setcookie('rem_me',1, time() + (86400 * 30), "/");
                    } 
                    return redirect()->route('dashboard');
            }else{
                Session::flash('message',"Password Incorrect"); 
                Session::flash('alert-class', 'alert-danger');
                return redirect()->back();
            }            
        }else{
            Session::flash('message', "Login Credentials Are Wrong"); 
            Session::flash('alert-class', 'alert-danger');
            return redirect()->back();
        }   
    }



    public function show_dashboard(){  
        $total_appointement = count(BookAppointment::all());
        $today_appointement = count(BookAppointment::whereDate("created_at",date('Y-m-d'))->get());
        $cancel_appointement = count(BookAppointment::where("status","2")->get());
        $accept_appointement = count(BookAppointment::where("status","!=","2")->get());
    	return view("admin.dashboard",compact('total_appointement','today_appointement','cancel_appointement','accept_appointement'));
    }

    public function show_timeslot(){       
        return view("admin.timeslot");
    }

    public function save_slot(Request $request){
        $date = $request->get("date");
        
        $getslotvalue = $this->getslotvalue("00:00","23:59",10);
        $ls = array();
        foreach ($getslotvalue as $g) {
           $data = SlotTiming::whereDate('date',$date)->where("slot",$g)->first();
           $a = array();
           $a['slot'] = $g;
           $a['is_sel'] = isset($data)?1:0;
           $ls[] = $a;
        }
        $ls = (object)$ls;
         Artisan::call('view:clear');
        Artisan::call('cache:clear');
        return view("admin.save_slot",compact('date','data','ls'));
    }

    public function post_timeslot(Request $request){
        $slot = $request->get("slot");
        $date = date("Y-m-d",strtotime($request->get("date")));
        SlotTiming::where("date",$date)->delete();
        if($request->get("slot")!=""){
            foreach ($slot as $k) {
                $store = new SlotTiming();
                $store->date = $date;
                $store->slot = $k;
                $store->save();
            }
        }    
         Artisan::call('view:clear');
        Artisan::call('cache:clear');
        Session::flash('message',"Slot Save Successfully"); 
        Session::flash('alert-class', 'alert-success');
        return redirect()->route('timeslot');
    }

    public function timeslot_data_table(Request $request){
         $book =SlotTiming::orderby('id','DESC')->groupBy('date')->get();
         return DataTables::of($book)          
            ->editColumn('date', function ($book) {
                return $book->date;
            })
            ->editColumn('action', function ($book) {
                $edit = route('save-slot', ['date'=>$book->date]);
                
                
                     return '<a  href="'.$edit.'"  rel="tooltip"  class="btn-primary" data-original-title="banner" style="margin-right: 10px;color: white !important;padding:10px;border-radius:10px"><i class="fa fa-edit"></i></a>';
               
              
                         
            })  
            ->addIndexColumn()         
            ->make(true);
    }

    

    public function logout(){
    	Auth::logout();
    	return redirect()->route('login');
    }

    public function show_edit_profile(Request $request){
        return view("admin.edit_profile");
    }

    public function update_profile(Request $request){
        $user = User::find(Auth::id());
        $user->name = $request->get("name");
        $user->email = $request->get("email");
        if($request->get("password")){
            $user->password = Hash::make($request->get("password"));
        }
        $user->save();
        Session::flash('message',"Update Profile Successfully"); 
        Session::flash('alert-class', 'alert-success');
        return redirect()->back();
    }

    public function generateslot(Request $request){
         $start_time=$request->get("start_time");
         $end_time=$request->get("end_time");
         $duration=$request->get("duration");
         $datetime1 = strtotime($start_time);
         $datetime2 = strtotime($end_time);
         $interval  = abs($datetime2 - $datetime1);
         $minutes   = round($interval / 60);         
         $noofslot=$minutes /$duration;
         $slot=array();
         if($noofslot>0){
            for ($i=0; $i <$noofslot; $i++) { 
                $a=$duration*$i;
                $slot[]=date("h :i A",strtotime("+".$a." minutes", strtotime($start_time)));
            }
         }
         $txt="";
         for($i=0;$i<count($slot);$i++){
             $txt=$txt.'<div class="col-md-12 md25">';
            if(isset($slot[$i])){
                 $txt=$txt.'<span class="slotshow">'.$slot[$i].'</span>';
                 $i++;
            }
            if(isset($slot[$i])){
                 $txt=$txt.'<span class="slotshow">'.$slot[$i].'</span>';
                 $i++;
            }           
            if(isset($slot[$i])){
                 $txt=$txt.'<span class="slotshow">'.$slot[$i].'</span>';
                 $i++;
            }
             if(isset($slot[$i])){
                 $txt=$txt.'<span class="slotshow">'.$slot[$i].'</span>';
                 $i++;
            }
            if(isset($slot[$i])){
                 $txt=$txt.'<span class="slotshow">'.$slot[$i].'</span>';
            }
            $txt=$txt."</div>";
          
         }
         return $txt;
     }

      
     
      public function getslotvalue($start_time,$end_time,$duration){       
         $datetime1 = strtotime($start_time);
         $datetime2 = strtotime($end_time);
         $interval  = abs($datetime2 - $datetime1);
         $minutes   = round($interval / 60);         
         $noofslot=$minutes /$duration;
         $slot=array();
         if($noofslot>0){
            for ($i=0; $i <$noofslot; $i++) { 
                $a=$duration*$i;
                $slot[]=date("h:i A",strtotime("+".$a." minutes", strtotime($start_time)));
            }
         }
         return $slot;
     }

}
