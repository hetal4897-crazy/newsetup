<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Setting;
use App\Models\Schedule;
use App\Models\SlotTiming;
use App\Models\BookAppointment;
use Razorpay\Api\Api;
use Hash;
use Auth;
use Session;
use Mail;
use ZipArchive;
use Artisan;
class FrontController extends Controller
{

   public function show_home(){
      $setting = Setting::find(1);      
      return view("front.home",compact('setting'));
   }
   
   public function create_zip(){
       
   }

   public function show_booktimeslot(Request $request){
        Artisan::call('view:clear');
        Artisan::call('cache:clear');
      $service_id = $request->get("service_id");
      $date = date('Y-m-d');
      if($request->get("date")){
          $date = $request->get("date");
      }
      $default_slot = $this->show_get_timeslotls($date);
       $timestamp = strtotime($date);
       
      return view("front.booktimeslot",compact('service_id','default_slot','date','timestamp'));
   }

    
   public function get_available_date(){
       $datasc=SlotTiming::whereDate("date",">=",date('Y-m-d'))->groupBy('date')->get();
       //echo "<pre>";print_r($datasc);exit;
       $date = array();
       foreach($datasc as $d){
           $date[] = date("Y-m-d",strtotime($d->date));
       }
       return json_encode($date);
   }
   
   public function show_payment_info(Request $request){
      //dd($request->all());
      $setting = Setting::find(1);
      $service_id = $request->get("service_id");
      $date = $request->get("slot_date");
      $time = $request->get("slot_name");
      return view("front.paymentinfo",compact('service_id','date','time','setting'));
   }

   public function show_get_timeslotls($date){
        date_default_timezone_set("Asia/Kolkata");
        $time = date("H:i A");
         $current_date = date("Y-m-d");
        
             $datasc=SlotTiming::where("date",$date)->get();
         
       $newdate = date('Y-m-d H:i A');
       
        
        $main=array();
        if(count($datasc)>0){
                  foreach ($datasc as $b) {
                       if(strtotime($current_date)!=strtotime($date)){
                          $ka=array();
                         $getappointment=BookAppointment::where("date",$date)->where("time",$b->slot)->first();
                          $ka['id']=$b->id;
                          $ka['name']=$b->slot;
                          if($getappointment){
                              $ka['is_book']='1';
                          }else{
                              $ka['is_book']='0';
                          }
                          $main[]=$ka;     
                       }else{
                           $todaydate = date('Y-m-d').$b->slot;
                           $getappointment=BookAppointment::where("date",$date)->where("time",$b->slot)->first();
                           if(strtotime($newdate)<strtotime($todaydate)){
                                  $ka=array();
                                  $ka['id']=$b->id;
                                  $ka['name']=$b->slot;
                                  if($getappointment){
                                      $ka['is_book']='1';
                                  }else{
                                      $ka['is_book']='0';
                                  }
                                  $main[]=$ka;   
                           }
                       }
                  }
        }
       // echo "<pre>";print_r($main);exit;
         $txt = "";
        if(isset($main)&&count($main)){
          foreach($main as $a){            
              $class = "";
              if($a['is_book']==1){
                $class = "active";
                 $txt = $txt.'<li id="selected_slot_'.$a['id'].'"><input type="radio" value="'.$a['name'].'" name="slot" id="'.$a['id'].'" ><label for="'.$a['id'].'" class="'.$class.' nslot" id="label_'.$a['id'].'">'.$a['name'].'</label></li>';
              }
              else{
                  $txt = $txt.'<li id="selected_slot_'.$a['id'].'"><input type="radio" value="'.$a['name'].'" name="slot" id="'.$a['id'].'" onchange="selected_slot_val('.$a['id'].')"><label for="'.$a['id'].'" class="'.$class.' nslot" id="label_'.$a['id'].'">'.$a['name'].'</label></li>';
              }
             
          }
        }else{
           
          $txt = $txt."<li style='color:red'>Sorry! slot is not available for this date</li>";
        }

        return $txt;
   }

   public function show_get_timeslot(Request $request){
        date_default_timezone_set("Asia/Kolkata");
       $date = date("Y-m-d",strtotime($request->get("date")));
        
        $time = date("H:i A");
         $current_date = date("Y-m-d");
       // echo $date;exit;
             $datasc=SlotTiming::where("date",$date)->get();
         
       $newdate = date('Y-m-d H:i A');
       
       // echo "<pre>";print_r($datasc);exit;
        $main=array();
        if(count($datasc)>0){
                  foreach ($datasc as $b) {
                       if(strtotime($current_date)!=strtotime($date)){
                           //echo "<pre>";print_r($b);exit;
                          $ka=array();
                         $getappointment=BookAppointment::where("date",$date)->where("time",$b->slot)->first();
                          $ka['id']=$b->id;
                          $ka['name']=$b->slot;
                          if($getappointment){
                              $ka['is_book']='1';
                          }else{
                              $ka['is_book']='0';
                          }
                          $main[]=$ka;     
                       }else{
                           $todaydate = date('Y-m-d').$b->slot;
                           $getappointment=BookAppointment::where("date",$date)->where("time",$b->slot)->first();
                          // echo $todaydate.'</br>'.$newdate.''.$b->slot;exit;
                           if(strtotime($newdate)<strtotime($todaydate)){
                                  $ka=array();
                                  $ka['id']=$b->id;
                                  $ka['name']=$b->slot;
                                  if($getappointment){
                                      $ka['is_book']='1';
                                  }else{
                                      $ka['is_book']='0';
                                  }
                                  $main[]=$ka;   
                           }
                       }
                  }
        }
      // echo "<pre>";print_r($main);exit;
         $txt = "";
         if(!empty($main)){
          foreach($main as $a){            
              $class = "";
              if($a['is_book']==1){
                $class = "active";
                 $txt = $txt.'<li id="selected_slot_'.$a['id'].'"><input type="radio" value="'.$a['name'].'" name="slot" id="'.$a['id'].'" ><label for="'.$a['id'].'" class="'.$class.' nslot" id="label_'.$a['id'].'">'.$a['name'].'</label></li>';
              }
              else{
                  $txt = $txt.'<li id="selected_slot_'.$a['id'].'"><input type="radio" value="'.$a['name'].'" name="slot" id="'.$a['id'].'" onchange="selected_slot_val('.$a['id'].')"><label for="'.$a['id'].'" class="'.$class.' nslot" id="label_'.$a['id'].'">'.$a['name'].'</label></li>';
              }
          }
        }else{
          $txt = "";
        }

        return $txt;
   }
   
   public function sendemail(Request $request){
             $user = BookAppointment::find(1);
             
            // $user->email = $request->get('email');
            $user->email = "hetaljogadiya48@gmail.com";
            //$user->admin_email = "report.desk@askpinkypromise.com";
           // $user->admin_name = "askpinkypromise";
           // $user->doctor_email = "trupti.shinde@askpinkypromise.com";
           // $user->doctor_name = "Dr. Trupti Shinde";
          $zip = new ZipArchive;
   
        $fileName = 'zip/document'.rand().'.zip';
   
        if ($zip->open(public_path($fileName), ZipArchive::CREATE) === TRUE)
        {
           
            $zip->addFile(storage_path('app/public/booking'.'/'.$user->thumbnail),$user->thumbnail);
            $arr = explode("#",$user->documents);
            foreach($arr as $a){
                $zip->addFile(storage_path('app/public/booking'.'/'.$a),$a);
            }
            $zip->close();
        }
        $user->fileName  = $fileName;
        
            
                 Mail::send('email.Bookinginfo', ['user' => $user], function($message) use ($user){
                     $message->to($user->email,$user->name)->subject('Pinky Promise')->attach(public_path($user->fileName));
                });
            
            
        
             echo "Mail Send Successfully";
    }

   public function post_booking_information(Request $request){
     // dd($request->all());
      $input = $request->all();
  
        $api = new Api(env('RAZOR_KEY'), env('RAZOR_SECRET'));
  
        $payment = $api->payment->fetch($input['razorpay_payment_id']);
  
        if(count($input)  && !empty($input['razorpay_payment_id'])) {
            try {
                $response = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount'=>$payment['amount'])); 

          $store = new BookAppointment();
          //$store->services_id = $request->get("services_id");
          $store->date = $request->get("date");
          $store->time = $request->get("time");
          $store->name = $request->get("name");
          $store->email = $request->get("email");
          $store->phone = $request->get("phone");
          $store->dob = $request->get("dob");
          $store->height_in_feet = $request->get("feet");
          $store->height_in_inches = $request->get("inches");
          $store->weight = $request->get("weight");
          $store->last_menstrual_period = $request->get("last_menstrual_period");
          $store->problem_facing = $request->get("problem_facing");
          $store->medical_history = $request->get("medical_history");
          $store->allergies = $request->get("allergies");
          $store->amount = 177;
          $store->transaction_token = $input['razorpay_payment_id'];
           $arr = array();
          if($request->file("thumbnail")){ 
                $store->thumbnail = $this->fileuploadFileImage($request,'booking','thumbnail');
              }

              if($request->hasfile("documents")){ 
               
                $data = $request->file("documents");
                foreach ($data as $k) {
                        $image     = $k;
                        $filename = $image->getClientOriginalName();
                        $extension = $image->getClientOriginalExtension() ?: 'png';               
                        $picture = rand().time() . '.' . $extension;
                        $destinationPath = Storage_path("app/public/booking/");
                        $k->move($destinationPath, $picture);
                        $arr[] = $picture;
                }
                $store->documents = implode("#",$arr);
              }
           $store->save();
           $ls = array();
           $ls[] =storage_path('app/public/booking'.'/'.$store->thumbnail);
           foreach($arr as $a){
               $ls[] =storage_path('app/public/booking'.'/'.$a);
           }
          
                $user = BookAppointment::find($store->id);
                $user->admin_email = "contact@askpinkypromise.com";
                //$user->admin_email = "hetaljogadiya48@gmail.com";
                 $user->admin_email1 = "report.desk@askpinkypromise.com";
                $user->admin_name = "askpinkypromise";
                $user->doctor_email = "trupti.shinde@askpinkypromise.com";
                $user->doctor_name = "Dr. Trupti Shinde";
                // $zip = new ZipArchive;
                // $fileName = 'zip/document_'.rand().'.zip';
           
                // if ($zip->open(public_path($fileName), ZipArchive::CREATE) === TRUE)
                // {
                   
                //     $zip->addFile(storage_path('app/public/booking'.'/'.$user->thumbnail),$user->thumbnail);
                //     $arr = explode("#",$user->documents);
                //     foreach($arr as $a){
                //         $f = storage_path('app/public/booking').'/'.$a;
                //         if (file_exists($f) && is_file($f)){
                //             $zip->addFile(storage_path('app/public/booking'.'/'.$a),$a);
                //         }

                        
                //     }
                //     $zip->close();
                // }
                // $user->fileName  = $fileName;
                $user->files = $ls;
                $user->subject = "Pinky Promise Tele Consult ".$user->date." ".$user->time;
                    try {
                         Mail::send('email.Bookinginfo', ['user' => $user], function($message) use ($user){
                             $message->to($user->email,$user->name)->subject($user->subject);
                        });
                     }catch (\Exception $e) {
                    }
                    try {
                         Mail::send('email.Bookinginfo', ['user' => $user], function($message) use ($user){
                             $message->to($user->admin_email,$user->admin_name)->subject($user->subject);
                             foreach ($user->files as $filePath) {
                                $message->attach($filePath);
                             }
                        });
                     }catch (\Exception $e) {
                    }
                    try {
                         Mail::send('email.Bookinginfo', ['user' => $user], function($message) use ($user){
                             $message->to($user->admin_email1,$user->admin_name)->subject($user->subject);
                             foreach ($user->files as $filePath) {
                                $message->attach($filePath);
                             }
                        });
                     }catch (\Exception $e) {
                    }
                    try {
                         Mail::send('email.Bookinginfo', ['user' => $user], function($message) use ($user){
                             $message->to($user->doctor_email,$user->doctor_name)->subject($user->subject);
                             foreach ($user->files as $filePath) {
                                $message->attach($filePath);
                             }
                        });
                     }catch (\Exception $e) {
                    }
            } catch (Exception $e) {
                Session::flash('message',$e->getMessage()); 
            Session::flash('alert-class', 'alert-danger');
                return redirect()->back();
            }
        }
          
        Session::flash('message',"Booking Confirmed and Paid"); 
        Session::flash('alert-class', 'alert-success');
        return redirect()->route('booking-confirmation');
   }

   public function show_booking_confirmation(){
      return view("front.confirmbooking");
   }
}
