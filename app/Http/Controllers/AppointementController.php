<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\SlotTiming;
use App\Models\BookAppointment;
use Hash;
use Auth;
use Session;
use DataTables;
class AppointementController extends Controller
{
    public function show_appointment(){
    	return view("admin.appointment.default");
    }

    public function show_appointment_datatable(Request $request){
         $book =BookAppointment::orderby('id','DESC')->get();
         return DataTables::of($book)          
            ->editColumn('name', function ($book) {
                return $book->name;
            })
            ->editColumn('created_at', function ($book) {
                return date("Y-m-d",strtotime($book->created_at));;
            })
            ->editColumn('status', function ($book) {
                if($book->status==0||$book->status==1){
                    return "Accepted";
                }
                if($book->status==2){
                    return "Canceled";
                }
            }) 
             
            ->editColumn('action', function ($book) {
               $edit = ""; //route('save-bookegory', ['id'=>$book->id]);
                
                if($book->status!=2){
                     return '<a  href="javascript:;" onclick="changestatus('.$book->id.',2)" rel="tooltip"  class="btn-danger" data-original-title="banner" style="margin-right: 10px;color: white !important;padding:10px;border-radius:10px"><i class="fa fa-close"></i></a>';
                }
              
                         
            })  
            ->addIndexColumn()         
            ->make(true);
    }   

    public function update_cancel_appointement(Request $request){
        $store = BookAppointment::find($request->get("id"));
        $store->status = $request->get('status');
        $store->save();
        return 1;
    }

 
}
