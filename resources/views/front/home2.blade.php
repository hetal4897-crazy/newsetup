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
}

.card-1 {
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
  transition: all 0.3s cubic-bezier(.25,.8,.25,1);
}

.card-1:hover {
  box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
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
</style>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


<section class="elementor-section elementor-top-section elementor-element elementor-element-2bf47c1a elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="2bf47c1a" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}" style="font-family: 'Kurale', sans-serif;">
   <div class="container" >
      <div class="row" style="margin: 80px 0px;" >
         
         
            <div class="card card-1">
                <div class="card-header">
                   <h2 style="display: flex;justify-content: center;" >Gynecologist Consultation</h2>
                </div>
              
                <div class="card-body">
                    <p>One-stop solution for all your reproductive, sexual and menstrual health issues. A safe and judgement-free space seeking to help thousands of people through friendly and affordable gynac consultations, easy at-home pathology tests with India’s top-most trusted path lab partner, free symptom-checker and support from thousands of people on our chat rooms.</p>
                    <p>One-stop solution for all your reproductive, sexual and menstrual health issues. A safe and judgement-free space seeking to help thousands of people through friendly and affordable gynac consultations, easy at-home pathology tests with India’s top-most trusted path lab partner, free symptom-checker and support from thousands of people on our chat rooms.</p>
                    <div class="row g-3" style="display: flex;justify-content: center;">
                             <div class="form-group col-md-3">
                                <label for="name" class="form-label">Select Service</label>
                                <div class="input-group">
                                   <select id="services" class="form-control select2">
                                       <option value="">Select Service</option>
                                       <option>PCOS/PCOD</option>
                                       <option>Irregular/Delayed Periods</option>
                                       <option>Sexual Health</option>
                                       <option>iPill Side Effects and Counselling</option>
                                       <option>Pregnancy</option>
                                       <option>Breast Health</option>
                                       <option>General Counselling</option>
                                       <option>Fertility and Difficulty Getting Pregnant</option>
                                       <option>Heavy or Painful Periods</option>
                                       <option>Sexually Transmitted Infections</option>
                                       <option>Pregnancy Scare</option>
                                       <option>Period Postponement</option>
                                       
                                   </select>

                                </div>
                                </div>
                              
                                <div class="col-md-2" style="margin-top: 40px">
                                  <button type="submit" class="btn btn-primary">Next</button>
                                </div>
                                 
                             </div>
                        
                </div>
                
            </div>
            <div class="card card-1" style="height: 547px;;">
                <div class="card-header">
                   <h2 style="display: flex;justify-content: center;" >Select a Date & Time</h2>
                </div>
              
                <div class="card-body">
                   <div class="row" >
                     <div class="col-md-3" style="border-right: 1px solid gray;">
                        <img src="https://askpinkypromise.com/wp-content/uploads/2021/07/PP-Favicons-512-x-512-150x150.png">
                        <h4>pinkypromise</h4>
                        <p>15 min</p>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                <div id='datetimepicker'>                 </div>
            </div>
                    </div>
                    <div class="col-md-3">
                        <div class="row custom-slot-design-box">
                          <ul style="height: 400px;overflow-y: overlay;">
                              <?php $i=0; $j=15;?>
                              <?php for($j=15;$j>=0;$j--){?>
                               
                                <li><input type="checkbox"  name="slot[]" id="slot_{{$i}}" value="{{$j}}"><label for="slot_{{$i}}" class="  nslot" id="label_{{$i}}">{{$j}}</label></li>
                                <?php $i++;?>
                              <?php }?>
                          </ul>
                          
                        </div>
                    </div>
                   </div>
                    
                        
                </div>
                
            </div>
            <div class="col-md-6">
            <h2 >Gynecologist Consultation</h2>
            <div class="title-underline"></div>
            <h4 style="margin-top: 25px">Program name </h4>
            <p>Teleconsultation with a Gynecologist on Pinky Promise. Please complete the payment and describe your issue in some detail so we can allocate the right doctor to you!</p>
            <h4>Program Description</h4>
            <p>Get a consultation, diagnosis and care in a highly private and friendly manner! Doctors will consult you on a phone call at a time that you prefer.</p>
            <h4>Fee breakup </h4>
            <p>Rs. 177/- inclusive of GST</p>
            <h4>Next steps</h4>
            <p>It will take us  a maximum of 12 working hours after receiving your payment to allocate a doctor to you. We work from 10am-8pm and do not work on Sundays or public holidays.</p>
            <p>We will ask you for a government issued ID proof to ensure your age is above 18 and your name matches what is entered by you here. This is required by law.</p>
            <h4>Refund and cancellation</h4>
            <p>Being disrespectful to team members will result in forfeiting your payment. We do not entertain refunds.</p>
            <h4>Name of the organizer </h4>
            <p>Pinky Promise</p>
            <p>Learn more: www.askpinkypromise.com</p>
            <h4>Contact Us:</h4>
            <p> contact@askpinkypromise.com</p>
            <p>022-48903666</p>
            <p>Terms & Conditions:</p>
            <p>https://askpinkypromise.com/terms-of-service/</p>
            <p>You agree to share information entered on this page with Pinky Promise Pvt Ltd (owner of this page) and Razorpay, adhering to applicable laws.</p>
         </div>
         <div class="col-md-6">
            <div class="card card-1" style="height: 1500px;">
                <div class="card-body">
                    <h4>Payment Information</h4>
                    <div class="title-underline"></div>
                      
                    <div class="row">
                    <div class="row g-3" style="padding:20px">
                     <div class="form-group">
                        <label for="name" class="form-label">Name <span>(Full name as in ID proof)</span></label>
                        <div class="input-group">
                           <input type="text" class="form-control" name="name" id="name" value="" placeholder="Please Enter Full Name" required>
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="email" class="form-label">Email</label>
                        <div class="input-group">
                           <input type="email" class="form-control" name="email" id="email" value="" placeholder="Please Enter Email Id" required >
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="phone" class="form-label">Phone</label>
                        <div class="input-group">
                           <input type="text" class="form-control" name="phone" id="phone" value="" placeholder="Please Enter Phone" onkeypress="return isNumber(event)" required>
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="dob" class="form-label">DOB</label>
                        <div class="input-group">
                           <input type="date" required class="form-control" name="dob" id="dob" value="" placeholder="">
                        </div>
                     </div>
                     <div class="form-group ">
                        <label class="form-label">Height</label>
                        <div class="input-group">
                           <input type="number" step="any" class="form-control" name="feet" id="feet" value="" required placeholder="feet">
                           <input type="number"  step="any" class="form-control" name="inches" id="inches" value="" required placeholder="inches">
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="form-label">Weight</label>
                        <div class="input-group">
                           <input type="number" step="any" class="form-control" name="weight" id="weight" value="" required placeholder="Please Enter Your Weight">
                        </div>
                     </div>
                     <div class="form-group">                      
                        <label class="form-label">Last Menstrual Period</label>
                        <div class="input-group">
                           <input type="date" class="form-control" name="last_menstrual_period" required id="last_menstrual_period" value="" placeholder="">

                        </div>
                        <span>When was the first day of the last time you had your periods?</span>
                     </div>
                     <div class="form-group">
                        <label for="problem_facing" class="form-label">Problem you are facing </label>
                        <div class="input-group">
                           <input type="text" class="form-control" required name="problem_facing" id="problem_facing" value="" placeholder="Please What Problem you are facing">
                        </div>
                        <span>This will help the doctor to get a sense of the issue you want to speak with her about!</span>
                     </div>
                      <div class="form-group">
                        <label for="medical_history" class="form-label">Medical history</label>
                        <div class="input-group">
                           <textarea class="form-control" required name="medical_history" id="medical_history" value="" placeholder="Please your medical history"></textarea>
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="allergies" class="form-label">Allergies</label>
                        <div class="input-group">
                           <textarea class="form-control"  required name="allergies" id="allergies" value="" placeholder="Please enter allergies details"></textarea>
                        </div>
                        <span>Are you allergic to any foods or medicines?</span>
                     </div>
                     <div class="form-group">
                        <label for="thumbnail" class="form-label">ID Proof</label>
                        <div class="input-group">
                           <input type="file" required class="form-control" name="thumbnail" id="thumbnail" accept="image/*" value="" placeholder="Upload Profile Picture">
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="documents" class="form-label">Medical Reports <span> (max 10 Files)</span></label>
                        <div class="input-group">
                           <input type="file" class="form-control" multiple name="documents[]" id="documents" value="" placeholder="Upload Documents">
                        </div>
                     </div>
                     <div class="form-group">
       <button style="    float: right;">Book Now</button>
    </div>
  </form>
                  </div>
                        
                        
      </div>
   </div>

</section>
@endsection
@section('footer')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js'></script>
<script src='https://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js'></script>



<script type="text/javascript">
  $(function () {
  $('#datetimepicker').datetimepicker({
    inline: true,
    sideBySide: true,
    locale: 'en',
    format: 'DD.MM.YYYY'
  });
});
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
       $(".nslot").removeClass("sel_slot");
       $("#label_"+id).addClass("sel_slot");
   
   }
</script>
@endsection