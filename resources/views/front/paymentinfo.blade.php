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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
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
   width: 59%;
   float: right;
   overflow: scroll;
   margin-right: 6px;
   }
   }
   .active {
   background: #af9d9e;
   color: white !important;
   border: 2px solid #af9d9e !important;
   }
   .sel_slot {
   background: #ff424c;
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
   border-radius: 10px;
   width: 100%;
   color: #05224f;
   border: 2px solid #f9cacc;
   }
   .card {
   background: #fff;
   border-radius: 2px;
   display: inline-block;
   height: 400px;
   margin: 1rem;
   position: relative;
   width: 100%;
   margin-top: 0px;
   padding-left: 0px;
   padding-right: 0px;
   }
   .card-header {
   padding: 0.75rem 1.25rem;
   margin-bottom: 0;
   background: #ff424c;
   color: white;
   }
   .card-1 {
   box-shadow: 6px 11px 24px 0 rgba(23,31,37,0.12);
   border: none;
   transition: all 0.3s cubic-bezier(.25,.8,.25,1);
   border-radius: 15px;
   padding: 15px;
   }
   input.razorpay-payment-button {
   background: #FF8E8C;
   border: none;
   border-radius: 8px;
   color: #fff;
   }
   input.razorpay-payment-button:focus, input.razorpay-payment-button:active,input.razorpay-payment-button:hover {
   background: #FF8E8C !important;
   box-shadow: none !important;
   border: none !important;
   }
   input[type="text"], input[type="number"], input[type="date"], input[type="email"] {
   border: 1px solid #CED4D9;
   }
   input[type="text"]:focus, input[type="number"]:focus, input[type="date"]:focus, input[type="email"]:focus, input[type="file"]:focus {
   border: 1px solid #FFE2DE;
   box-shadow:none;
   }
   .textarea:focus {
   border: 1px solid #FFE2DE;
   box-shadow:none;
   }
   ::placeholder {
   color: #6C757;
   }
   input[type=date]:invalid::-webkit-datetime-edit {
   color: #6C757;
   }
   .field-note {
   font-size: 13px;
   margin-top: 4px;
   }
   .title-underline {
   border-color: rgb(255,226,222);
   }
   .title-underline, #wysiwyg-root .title-underline {
   display: block;
   width: 28px;
   border-bottom: 5px solid;
   margin-top: 20px;
   border-color: #ff424c;
   }
   h2,h4 {
   color: #0E2266;
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
   div.files {
   background: #eee;
   padding: 1rem;
   margin: 1rem 0;
   border-radius: 10px;
   }
   div.files ul {
   list-style: none;
   padding: 0;
   max-height: 150px;
   overflow: auto;
   }
   div.files ul li {
   padding: 0.5rem 0;
   padding-right: 2rem;
   position: relative;
   }
   div.files ul li i {
   cursor: pointer;
   position: absolute;
   top: 50%;
   right: 0;
   transform: translatey(-50%);
   }
   div.container {
   width: 100%;
   padding: 0 0rem;
   }
   span.file-size {
   color: #999;
   padding-left: 0.5rem;
   }
   table td, table th{
   border: none !important;
   border-bottom: none;
   padding: 0.1px 0.1px 4px 0.1px !important;
   }
   .fileupld{
   background: #eee;
   border-radius: 8px;
   margin: 0 15px 15px 0;
   padding: 10px 10px 10px 15px;
   }
   .form-label {
   line-height: 20px !important;
   }
   .table {
   margin-bottom: 5px !important;
   }
   tbody, td, tfoot,tr {
   border-color: inherit;
   border-style: solid;
   border-width: 0;
   background: #eee;
   }
   th {
   background: #eee !important;
   font-weight: 500 !important;
   font-family:Lora;
   }
   a {
   color: #ff424c;
   }
   a:hover {
   color: #ff424c;
   }
   table caption+thead tr:first-child td, table caption+thead tr:first-child th, table colgroup+thead tr:first-child td, table colgroup+thead tr:first-child th, table thead:first-child tr:first-child td, table thead:first-child tr:first-child th{
   border-top:none !important;
   }
   .table thead th{
   border-bottom:none !important;
   }
   table tbody>tr:nth-child(odd)>td {
   background-color: hsl(0deg 0% 50.2% / 0%) !important;
   }
   .asterix {
       color: #FF424C;
   }
   @media only screen and (max-width: 960px) {
       .col-xs-12 {
            display: flex;
            flex-direction: column-reverse;
           padding: 0px 20px;
       }
   }
   @media only screen and (min-width: 960px) {
       .col-xs-12 {
          margin: 80px 0px;
       }
   }
   


   @font-face{font-family:lora;font-style:normal;font-weight:400;src:local('Lora'),url(https://fonts.cdnfonts.com/s/13623/Lora.woff) format('woff')}@font-face{font-family:lora;font-style:normal;font-weight:400;src:local('Lora'),url(https://fonts.cdnfonts.com/s/13623/Lora-Regular.woff) format('woff')}@font-face{font-family:lora;font-style:italic;font-weight:400;src:local('Lora'),url(https://fonts.cdnfonts.com/s/13623/Lora-Italic.woff) format('woff')}@font-face{font-family:lora;font-style:normal;font-weight:700;src:local('Lora'),url(https://fonts.cdnfonts.com/s/13623/Lora-Bold.woff) format('woff')}@font-face{font-family:lora;font-style:italic;font-weight:700;src:local('Lora'),url(https://fonts.cdnfonts.com/s/13623/Lora-BoldItalic.woff) format('woff')}
   .loading-overlay {
  display: none;
  background: rgba(255, 255, 255, 0.7);
  position: fixed;
  bottom: 0;
  left: 0;
  right: 0;
  top: 0;
  z-index: 9998;
  align-items: center;
  justify-content: center;
}

.loading-overlay.is-active {
  display: flex;
}

.code {
  font-family: monospace;
/*   font-size: .9em; */
  color: #dd4a68;
  background-color: rgb(238, 238, 238);
  padding: 0 3px;
} 
</style>

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<div class="loading-overlay">
  <span class="fas fa-spinner fa-3x fa-spin"></span>
</div>
<section class="elementor-section elementor-top-section elementor-element elementor-element-2bf47c1a elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="2bf47c1a" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}" style="font-family: 'lora', sans-serif;">
   <div class="container" >
   <div class="row col-xs-12">
      
            <div class="col-md-6">
      <h2 >Gynaecologist Consultation</h2>
      <div class="title-underline"></div>
      <h4 style="margin-top: 25px">Program name </h4>
      <p>Teleconsultation with a Gynaecologist on Pinky Promise. Please complete the payment and describe your issue in some detail so we can allocate the right doctor to you!</p>
      <h4>Program Description</h4>
      <p>Get a consultation, diagnosis and care in a highly private and friendly manner! Doctors will consult you on a phone call at a time that you prefer.</p>
      <h4>Fee breakup </h4>
      <p>Rs. 177/- inclusive of GST</p>
      <h4>Next steps</h4>
      <p>Once you have completed the payment process, you will receive your booking details on the registered email ID. Please go through the same and if any errors found, contact us on the support number given below.</p>
      <h4>Refund and cancellation</h4>
      <p>Being disrespectful to team members will result in forfeiting your payment. We do not entertain refunds. If you wish to reschedule your appointment with the gynaecologist, please contact us on the support number given below.</p>
      <h4>Name of the organizer </h4>
      <p>Pinky Promise</p>
      <p>Learn more: <a href="https://askpinkypromise.com" target="_blank">www.askpinkypromise.com</a></p>
      <h4>Contact Us:</h4>
      <p>Email: <a href="mailto:contact@askpinkypromise.com">contact@askpinkypromise.com</a></p>
      <p>Call: <a href="tel:02248903666">022-48903666</a></p>
      <p>WhatsApp us: <a href="https://api.whatsapp.com/send?phone=918142013654&text=Hello%20PinkyPromise">+91 81420 13654</a></p>
      <h4>Terms & Conditions:</h4>
      <p><a href="https://askpinkypromise.com/terms-of-service/" target="_blank">www.askpinkypromise.com/terms-of-service/</a></p>
      <p>You agree to share information entered on this page with Pinky Promise Pvt Ltd (owner of this page) and Razorpay, adhering to applicable laws.</p>
      <h4>Please note:</h4>
      <p> As per the Medical Termination of Pregnancy Act 1971, Doctors on digital platforms like Pinky Promise cannot prescribe any medications for the termination of pregnancy. They can only counsel and guide you. By proceeding with an appointment, you acknowledge and understand this.</p>
   </div>
   <div class="col-md-6">
   <div class="card card-1" style="height: auto;    margin-left: 0px;">
      <div class="card-body">
         <h4>Patient Information</h4>
         <div class="title-underline"></div>
         <form action="{{route('post.booking.detail')}}" method="POST" enctype="multipart/form-data" id="paymentform" style="margin-top: 50px;" >
            <div  style="">
               <input type="hidden" name="services_id" value="{{$service_id}}">
               <input type="hidden" name="date" value="{{$date}}">
               <input type="hidden" name="time" value="{{$time}}">
               <div class="row g-3">
                  <div class="form-group">
                     <label for="name" class="form-label">Name<span class="asterix">*</span></label>
                     <div class="input-group">
                        <input type="text" class="form-control" name="name" id="name" value="" placeholder="" required>
                     </div>
                     <span class="field-note">(Full name as in ID proof)</span>
                  </div>
                  <div class="form-group">
                     <label for="email" class="form-label">Email ID<span class="asterix">*</span></label>
                     <div class="input-group">
                        <input type="email" class="form-control" name="email" id="email" value="" placeholder="" required >
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="form-label">Height<span class="asterix">*</span></label>
                     <div class="input-group">
                        <input type="number" step="any" class="form-control" name="feet" id="feet" value="" required placeholder="feet">
                        <input type="number"  step="any" class="form-control" name="inches" id="inches" value="" required placeholder="inches">
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="form-label">Weight (in kg)<span class="asterix">*</span></label>
                     <div class="input-group">
                        <input type="number" step="any" class="form-control" name="weight" id="weight" value="" required placeholder="">
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="form-label">Last Menstrual Period<span class="asterix">*</span></label>
                     <div class="input-group">
                        <input type="date" class="form-control" name="last_menstrual_period" required id="last_menstrual_period" value="" placeholder="">
                     </div>
                     <span class="field-note">When was the first day of the last time you had your periods?</span>
                  </div>
                  <div class="form-group">
                     <label for="problem_facing" class="form-label">Problem you are facing<span class="asterix">*</span></label>
                     <div class="input-group">
                        <input type="text" class="form-control" required name="problem_facing" id="problem_facing" value="" placeholder="">
                     </div>
                     <span class="field-note">This will help the doctor to get a sense of the issue you want to speak to her about!</span>
                  </div>
                  <div class="form-group">
                     <label for="medical_history" class="form-label">Medical history<span class="asterix">*</span></label>
                     <div class="input-group">
                        <textarea class="form-control textarea" required name="medical_history" id="medical_history" value="" placeholder=""></textarea>
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="allergies" class="form-label">Allergies (optional)</label>
                     <div class="input-group">
                        <textarea class="form-control textarea"   name="allergies" id="allergies" value="" placeholder=""></textarea>
                     </div>
                     <span class="field-note">Are you allergic to any foods or medicines?</span>
                  </div>
                  <div class="form-group">
                     <label for="phone" class="form-label">Phone<span class="asterix">*</span></label>
                     <div class="input-group">
                        <input type="text" class="form-control" name="phone" id="phone" value="" placeholder="" onkeypress="return isNumber(event)" required>
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="dob" class="form-label">Date of Birth (DOB)<span class="asterix">*</span></label>
                     <div class="input-group">
                        <input type="date" required class="form-control" name="dob" id="dob" value="" placeholder="">
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="thumbnail" class="form-label">Please upload Aadhar card, PAN card, Driving license, Voter ID or Passport<span class="asterix">*</span></label>
                     <div class="input-group">
                        <input type="file" required class="form-control" name="thumbnail" id="thumbnail" accept="image/*" value="" placeholder="Upload valid ID Proof">
                        <span class="field-note">Why do we ask for ID?<br>According to the Indian Tele Medicine Practice Guidelines our doctors need to make sure that your name and date of brith matches a government ID before consulting with you. For more information on how we provide privacy to you and your data please read our privacy policy.</span>
                     </div>
                  </div>
                  <div class="form-group" style="padding-bottom:0;margin-bottom:0;">
                     <label for="upload" class="form-label">Medical Reports<br>Max. 10 files (optional)</label>
                     <button id='add-row' class='btn btn-primary' type='button' style="font-size: 13px;padding: 8px 20px;border-radius: 8px;background: #fff;border: 1px solid #ff424c; color:#ff424c;float: right;">Add files</button>
                  </div>
                  <div class="fileupld">
                     <table id="test-table" class="table table-condensed" style="margin-top: 0px;">
                        <thead>
                           <tr>
                              <th style="font-size: 15px;">List of Files</th>
                              <th> </th>
                           </tr>
                        </thead>
                        <tbody id="test-body">
                           <tr id="row0">
                              <td>
                                 <input name='documents[]'  type='file' class='form-control' />
                              </td>
                              <td>
                                 <button style="font-size: 13px;padding: 9px 12px;border-radius: 5px;margin-left: 5px;background: #FF8E8C;border: none;" class='delete-row btn btn-primary' type='button'><i class="fa fa-close" aria-hidden="true"></i></button>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
            <script src="https://checkout.razorpay.com/v1/checkout.js"
               data-key="{{env('RAZOR_KEY')}}"
               data-amount="{{$setting->amount*100}}"
               data-buttontext="Confirm Booking"
               data-name="Pinky Promise"
               data-description="Pinky Promise Tele Consult"
               data-prefill.name="name"
               data-prefill.email="email"
               data-image="{{asset('public/logo.png')}}"
               data-theme.color="#FF8E8C"></script>
            <input type="hidden" name="_token" value="{!!csrf_token()!!}">
         </form>
      </div>
   </div>
   </div>
   
</section>
@endsection
@section('footer')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="{{asset('public/js/script.js?v='.time())}}"></script>


<script type="text/javascript">

    
   $('#services').select2({
   selectOnClose: true
   });
    function isNumber(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
        return true;
    } 
     
    var row=1;
   $(document).on("click", "#add-row", function () {
         if(row<10){
              var new_row = '<tr id="row' + row + '"><td><input name="documents[]" required type="file" class="form-control" /></td><td> <button style="font-size: 13px;padding: 9px 12px;margin-left: 5px;border-radius: 5px;    background: #FF8E8C;border: none;" class="delete-row btn btn-primary" type="button"><i class="fa fa-close" aria-hidden="true"></i></button></td></tr>';
            // alert(new_row);
           $('#test-body').append(new_row);
           row++;
          return false;
         }else{
             alert(" max. 10 files ");
         }
          
   });
   
   // Remove criterion
   $(document).on("click", ".delete-row", function () {
   //  alert("deleting row#"+row);
     if(row>1) {
       $(this).closest('tr').remove();
       row--;
     }
   return false;
   });
   
</script>
@endsection