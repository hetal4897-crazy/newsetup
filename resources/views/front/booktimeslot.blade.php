@extends('front.layout')
@section('header')
Booking
@endsection
@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
<link rel='stylesheet' href='https://eonasdan.github.io/bootstrap-datetimepicker/css/prettify-1.0.css'>
<link rel='stylesheet' href='https://eonasdan.github.io/bootstrap-datetimepicker/css/base.css'>
<link rel='stylesheet' href='https://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css'>
<style type="text/css">
@font-face{font-family:lora;font-style:normal;font-weight:400;src:local('Lora'),url(https://fonts.cdnfonts.com/s/13623/Lora.woff) format('woff')}@font-face{font-family:lora;font-style:normal;font-weight:400;src:local('Lora'),url(https://fonts.cdnfonts.com/s/13623/Lora-Regular.woff) format('woff')}@font-face{font-family:lora;font-style:italic;font-weight:400;src:local('Lora'),url(https://fonts.cdnfonts.com/s/13623/Lora-Italic.woff) format('woff')}@font-face{font-family:lora;font-style:normal;font-weight:700;src:local('Lora'),url(https://fonts.cdnfonts.com/s/13623/Lora-Bold.woff) format('woff')}@font-face{font-family:lora;font-style:italic;font-weight:700;src:local('Lora'),url(https://fonts.cdnfonts.com/s/13623/Lora-BoldItalic.woff) format('woff')}
   .custom-slot-design-box ul {
   list-style: none;
   padding-left: 0px;
   }
   @media only screen and (max-width: 300px) {
   .custom-slot-design-box li {
   display: inline-block;
   width: 30%;
   float: right;
   margin-right: 6px;
   }
   }
   @media only screen and (min-width: 600px) {
   .custom-slot-design-box li {
   display: table;
   width: 90%;
   float: right;
   text-align: center;
   overflow: scroll;
   margin-right: 6px;
   }
   .nextbtn{
       margin-bottom:10px;
   }
   .slot_title{
        padding: 13px;margin-bottom: 10px;font-size: 18px;border-radius: 0.25rem;width: 65%;background: #FF8E8C;color: white;border: none;
    }
   
   }
   @media only screen and (max-width: 600px) {
   
   .nextbtn{
       margin-bottom:10px;
   }
    .modal_close{
            position: absolute;
    }
    .scrollbar li{
        margin: 0px 30px;
    }
    .slot_title{
        padding: 13px;margin-bottom: 10px;font-size: 18px;border-radius: 0.25rem;width: 65%;background: #FF8E8C;    color: white;border: none;
    }
    
   }
     @media only screen and (min-width: 900px) {
   .slot_title{
        padding: 13px;margin-bottom: 10px;font-size: 18px;border-radius: 0.25rem;width: 100%;background: #FF8E8C;    color: white;border: none;
    }
     }
   .active {
   background: #af9d9e;
   color: white !important;
   border: 2px solid #FF8E8C !important;
   }
   .sel_slot {
   background: #FF8E8C;
   color: white !important;
   }
   .appointment-time input {
   position: relative;
   width: 100%;
   height: 50px;
   background: var(--background-light);
   padding: 10px 20px;
   color: #808080;
   font-size: 14px;
   border-radius: 10px;
   }
   .custom-slot-design-box input {
   visibility: hidden;
   display: none;
   }
   input[type="radio"], input[type="checkbox"] {
   box-sizing: border-box;
   padding: 0;
   }
   .custom-slot-design-box label {
   cursor: pointer;
   padding: 13px;
   margin-bottom: 10px;
   font-size: 18px;
   border-radius: 0.25rem;
   width: 100%;
   color: #05224f;
   border: 2px solid #f9cacc;
   }
   .card {
   background: #fff;
   border-radius: 2px;
   display: inline-block;
  
 
   position: relative;
   width: 100%;
   margin-top: 0px;
   padding-left: 0px;
   padding-right: 0px;
   }
   .card-header {
   padding: 0.75rem 1.25rem;
   margin-bottom: 0;
   background: white;
   color: #FF8E8C;
   }
.card-header:first-child {
    border-radius: 15px;
    margin: 5px;
}
.bootstrap-datetimepicker-widget table td.disabled, .bootstrap-datetimepicker-widget table td.disabled:hover {
    background: whitesmoke;
    color: #777777;
    cursor: not-allowed;
}
.card-1 {
  box-shadow: 6px 11px 24px 0 rgba(23,31,37,0.12);
  border: none;
  transition: all 0.3s cubic-bezier(.25,.8,.25,1);
  border-radius: 15px;
}

   .title-underline {
   border-color: rgb(255,226,222);
   }
   .title-underline, #wysiwyg-root .title-underline {
   display: block;
   width: 28px;
   border-bottom: 5px solid;
   margin-top: 20px;
   border-color: #FF8E8C;
   }
   .bootstrap-datetimepicker-widget {
   width: 100% !important;
   max-width: none !important;
   } 
   .select2-container .select2-selection--single {
   box-sizing: border-box;
   cursor: pointer;
   display: block;
   height: 37px !important;
   user-select: none;
   -webkit-user-select: none;
   }
   .select2-container--default .select2-selection--single .select2-selection__rendered {
   color: #444;
   line-height: 33px !important;
   }
   .scrollbar
{
  
  float: left;
  height: 400px;
 width: -webkit-fill-available;
  overflow-y: scroll;
  margin-bottom: 25px;
}

#slotbox::-webkit-scrollbar-track
{
  -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
  background-color: #F5F5F5;
}

#slotbox::-webkit-scrollbar
{
  width: 6px;
  background-color: #F5F5F5;
}

#slotbox::-webkit-scrollbar-thumb
{
  background-color: #000000;
}
table td,table th {
                padding: 10px;
                line-height: 1.5;
                vertical-align: top;
                border: 1px solid hsla(0,0%,50.2%,.5019607843)
            }
.bootstrap-datetimepicker-widget table td.active, .bootstrap-datetimepicker-widget table td.active:hover {
    background-color: white;
    color: black !important;
    text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
}

.bootstrap-datetimepicker-widget table td.day:hover, .bootstrap-datetimepicker-widget table td.hour:hover, .bootstrap-datetimepicker-widget table td.minute:hover, .bootstrap-datetimepicker-widget table td.second:hover {
    background: white;
    cursor: pointer;
}

.bootstrap-datetimepicker-widget table td.disabled, .bootstrap-datetimepicker-widget table td.disabled:hover
{
     background: whitesmoke;
    cursor: pointer;
}

.datepicker-days {
    min-height: .01%;
    overflow-x: auto;
}
.btn-primary.focus, .btn-primary:focus {
    box-shadow: none;
}

table tbody tr:hover>td, table tbody tr:hover>th {
    background-color:white;
}

.bootstrap-datetimepicker-widget table th.next::after {
    position: absolute;
    width: 1px;
    height: 1px;
    margin: -1px;
    padding: 0;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    border: 0;
    content: ">";
    display: contents;
}
.bootstrap-datetimepicker-widget table th.prev::after {
    position: absolute;
    width: 1px;
    height: 1px;
    margin: -1px;
    padding: 0;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    border: 0;
    content: "<";
    display: contents;
}
</style>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<section class="elementor-section elementor-top-section elementor-element elementor-element-2bf47c1a elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="2bf47c1a" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}" style="font-family: 'lora', sans-serif;">
   <div class="container" >
      <div class="row" style="margin: 40px 0px;">
        <h2 style="display: flex;justify-content: center;margin-bottom:25px;" >Kindly proceed to book your appointment by selecting a slot below.</h2>
         <div class="card card-1" style="height: auto;">
            <div class="card-header">
               <h4 style="display: flex;justify-content: center;font-family:"Lora";" >Select a Date & Time</h4>
            </div>
            <div class="card-body">
               <div class="row" >
                  <div class="col-md-4" style="text-align:center;">
                     <img src="{{asset('public/gynacs.png')}}" style="height: 365px;float: left;">
                     <!--<h4 style="font-size: 20px;font-weight: 600;">Dr. Trupti Shinde</h4>-->
                     <!--<p style="font-family: 'Lora', Sans-serif;font-size: 13px;    font-weight: 400;">MBBS, MS (Ob-Gyn), FMAS</p>
                     <div style="    margin-bottom: 15px;">
                        <button type="button" style="font-size: 13px;padding: 10px 20px;border-radius: 2px;background: #FF8E8C;    border: none;" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">View Profile</button>
                     </div>-->
                  </div>
                  <div class="col-md-5">
                     <div class="form-group">
                        <div id='datetimepicker'>                 </div>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <input type="hidden" name="datetime" id="datetime" value="{{$date}}">
                     <input type="hidden" id="service_id" value="{{$service_id}}">
                     <input type="hidden" id="current_slot" value="">
                     <input type="hidden" id="current_slot_html" value="">
                     <div class="row custom-slot-design-box" style="padding-right: 20px;">
                        <ul id="slotbox" class="scrollbar" style="height: 365px;overflow-y: overlay;">
                           <?=$default_slot?>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<div class="modal" id="myModal">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content ">

      <!-- Modal Header -->
      <div class="modal-header" style="    background: #ffe2de;">
          <div class="row col-md-12" style="    padding-right: 0px;">
              <div class="col-md-11">
                   <h3 class="modal-title" style="    text-align: center;    font-family: 'lora', sans-serif;">Gynaecologist Profile</h3>
              </div>
              <div class="col-md-1 modal_close">
                  <button  style="float:right;border: none;    margin-top: 5px;" class="btn-close" data-bs-dismiss="modal"></button>
              </div>
          </div>
       
        
      </div>

      <!-- Modal body -->
      <div class="modal-body">
          <div class="row">
              <div class="col-md-3">
                  <img src="{{asset('public/drq1.png')}}">
              </div>
              <div class="col-md-9">
                  <h4 style="font-size: 20px;font-weight: 600;    font-family: 'lora', sans-serif;">Dr. Trupti Shinde</h4>
                  <ul>
                      <li style="font-family: 'lora', sans-serif;">Basic and Advanced Laparoscopic Surgeon</li>
                      <li style="font-family: 'lora', sans-serif;">Infertility expert</li>
                      <li style="font-family: 'lora', sans-serif;">High Risk Obstetrics</li>
                  </ul>
                  <p style="font-family: 'lora', sans-serif;text-align: justify;">
                      Dr. Trupti Shinde has about 5 years of expertise in the field of Obstetrics and Gynaecology. She has worked as Senior Resident and Consultant at various institutes like NMMC Hospital, K.J Somaiya Medical College & Hospital, Bombay Hospital. She has successfully undertaken her training in ALSO (Advanced Life Support in Obstetrics – Provider Course), ACLS (Advanced Cardiovascular Life Support) and World Population Stabilisation Fortnight Counsellor Training Program. Combined with utmost care and compassion, she is an expert in managing cases of high-risk pregnancies, reproductive health, infertility and various gynaecological surgeries. Also, she has a special interest in the field of Adolescent health, PCOS awareness, Cancer prevention, Peri-menopausal and Menopausal health.
                  </p>
              </div>
          </div>
      </div>

     
    </div>
  </div>
</div>
@endsection
@section('footer')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js'></script>
<script src='https://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js'></script>

<script type="text/javascript">

        var datearr = [];
        $.ajax({
                    url: '{{route("get_available_date")}}',
                    method:"get",
                    success: function( data ) {
                       var str = JSON.parse(data);
                       for(var i =0;i<str.length;i++){
                           datearr.push(str[i]);
                           
                       }
                       var date = new Date('{{$date}}');
                       console.log(date);
                       $('#datetimepicker').datetimepicker({format: 'DD.MM.YYYY',inline: true,sideBySide: true,enabledDates: datearr,locale: 'en',minDate : new Date({{$timestamp}}),defaultDate:date }).on('dp.change',function(e){                    
                                  var formatedValue = e.date.format("YYYY-MM-DD");
                                  $("#datetime").val(formatedValue);
                                  window.location.href= '{{url("/")}}'+"?date="+formatedValue;
                                 /* $.ajax({
                                           url: '{{route("get_timeslot")}}',
                                           method:"get",
                                           data:{date:formatedValue},
                                           success: function( data ) {
                                               if(data!=0){
                                                   $("#slotbox").html(data);
                                               }
                                               else{
                                                     console.log("hi");
                                                    $("#slotbox").html("<li style='    color: red;'>Sorry! slot is not available for this date</li>");
                                               }
                                           }
                                  });*/
                           }); 
                       
                    }
          
       });
      
  
   
   
   
    
   function check_available_slot(){
       var date = $("#slot_date").val();
       $.ajax({
                   url: '{{route("get_timeslot")}}',
                   method:"get",
                   data:{date:date},
                   success: function( data ) {
                       $("#slotdiv").html(data);
                       
                   }
       });
   }
   
   function selected_slot_val(id){
       var slot_id = $("#"+id).val();
       var service_id = $("#service_id").val();
       var date = $("#datetime").val();
       if($("#current_slot").length){
           var current_slot = $("#current_slot").val();
           $("#selected_slot_"+current_slot).html($("#current_slot_html").val())
       }
       var url = "{{route('payment.info')}}";
       $("#current_slot").val(id);
       $("#current_slot_html").val($("#selected_slot_"+id).html());
       $("#selected_slot_"+id).html('<form id="booking_form" action="'+url+'" method="get"><input type="hidden" name="service_id" value="'+service_id+'"><input type="hidden" name="slot_date"  value="'+date+'"><input type="hidden" name="slot_name" id="slot_name" value="'+slot_id+'"><div class="row" style="padding: 0px 15px;"><div class="col-md-8 slot_title" ><span>'+slot_id+' </span></div><div class="col-md-3 nextbtn" style="height: 50px;padding-left: 5px;width: 50px;"><button style="height: 53px;    box-shadow: none;background:#FF8E8C;border:none;" type="submit" class="btn btn-primary " style="">Next</button></div></div></form><div></div>');
   }
   


</script>
@endsection

