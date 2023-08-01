@extends('front.layout')
@section('header')
Booking
@endsection
@section('content')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
    border-radius:15px;
}
.card-header:first-child {
    border-radius: 15px;
    margin: 5px;
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

.btntop {
    margin-top: 40px;
}
@media only screen and (max-width: 600px) {
   .btntop {
    margin-top: 5px;
    }
}

.select2-container--default .select2-selection--single .select2-selection__rendered {
    color: #444;
    line-height: 33px !important;
}
@font-face{font-family:lora;font-style:normal;font-weight:400;src:local('Lora'),url(https://fonts.cdnfonts.com/s/13623/Lora.woff) format('woff')}@font-face{font-family:lora;font-style:normal;font-weight:400;src:local('Lora'),url(https://fonts.cdnfonts.com/s/13623/Lora-Regular.woff) format('woff')}@font-face{font-family:lora;font-style:italic;font-weight:400;src:local('Lora'),url(https://fonts.cdnfonts.com/s/13623/Lora-Italic.woff) format('woff')}@font-face{font-family:lora;font-style:normal;font-weight:700;src:local('Lora'),url(https://fonts.cdnfonts.com/s/13623/Lora-Bold.woff) format('woff')}@font-face{font-family:lora;font-style:italic;font-weight:700;src:local('Lora'),url(https://fonts.cdnfonts.com/s/13623/Lora-BoldItalic.woff) format('woff')}

</style>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


<section class="elementor-section elementor-top-section elementor-element elementor-element-2bf47c1a elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="2bf47c1a" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}" style="font-family: 'lora';">
   <div class="container" >
      <div class="row" style="margin: 80px 0px;">
            <div class="card card-1">
                <div class="card-header">
                   <h2 style="display: flex;justify-content: center;" >Gynaecologist Consultation</h2>
                </div>
              
                <div class="card-body">
                    <p>One-stop solution for all your reproductive, sexual and menstrual health issues. A safe and judgement-free space seeking to help thousands of people through friendly and affordable gynac consultations, easy at-home pathology tests with India’s top-most trusted path lab partner, free symptom-checker and support from thousands of people on our chat rooms.</p>
                    <form action="{{route('book.timeslot')}}" method="get">
                    <div class="row g-3" style="display: flex;justify-content: center;">
                           
                             <div class="form-group col-md-4">
                                <label for="name" class="form-label">Select Your Issue</label>
                                <div class="input-group">
                                   <select id="services" name="service_id" class="form-control select2" required>
                                       <option value="">Select Issue</option>
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
                              
                                <div class="col-md-2 btntop">
                                  <button type="submit" style="background:#ff424c" class="btn btn-primary">Next</button>
                                </div>
                                 
                             </div>
                             </form>
                        
                </div>
                
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
        var slot_id = $("#"+id).val();
       $("#selected_slot_").html(slot_id);
   
   }
</script>
@endsection