@extends('front.layout')
@section('header')
Booking
@endsection
@section('content')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<style type="text/css">
  .success-animation { margin:50px auto;}
@font-face{font-family:lora;font-style:normal;font-weight:400;src:local('Lora'),url(https://fonts.cdnfonts.com/s/13623/Lora.woff) format('woff')}@font-face{font-family:lora;font-style:normal;font-weight:400;src:local('Lora'),url(https://fonts.cdnfonts.com/s/13623/Lora-Regular.woff) format('woff')}@font-face{font-family:lora;font-style:italic;font-weight:400;src:local('Lora'),url(https://fonts.cdnfonts.com/s/13623/Lora-Italic.woff) format('woff')}@font-face{font-family:lora;font-style:normal;font-weight:700;src:local('Lora'),url(https://fonts.cdnfonts.com/s/13623/Lora-Bold.woff) format('woff')}@font-face{font-family:lora;font-style:italic;font-weight:700;src:local('Lora'),url(https://fonts.cdnfonts.com/s/13623/Lora-BoldItalic.woff) format('woff')}
.checkmark {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    display: block;
    stroke-width: 2;
    stroke: #4bb71b;
    stroke-miterlimit: 10;
    box-shadow: inset 0px 0px 0px #4bb71b;
    animation: fill .4s ease-in-out .4s forwards, scale .3s ease-in-out .9s both;
    position:relative;
    top: 5px;
    right: 5px;
   margin: 0 auto;
}
.checkmark__circle {
    stroke-dasharray: 166;
    stroke-dashoffset: 166;
    stroke-width: 2;
    stroke-miterlimit: 10;
    stroke: #4bb71b;
    fill: #fff;
    animation: stroke 0.6s cubic-bezier(0.65, 0, 0.45, 1) forwards;
 
}

.checkmark__check {
    transform-origin: 50% 50%;
    stroke-dasharray: 48;
    stroke-dashoffset: 48;
    animation: stroke 0.3s cubic-bezier(0.65, 0, 0.45, 1) 0.8s forwards;
}

@keyframes stroke {
    100% {
        stroke-dashoffset: 0;
    }
}

@keyframes scale {
    0%, 100% {
        transform: none;
    }

    50% {
        transform: scale3d(1.1, 1.1, 1);
    }
}

@keyframes fill {
    100% {
        box-shadow: inset 0px 0px 0px 30px #4bb71b;
    }
}
.card {
  background: #fff;
  border:none;
    border-radius: 15px;
    display: inline-block;
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
  transition: all 0.3s cubic-bezier(.25,.8,.25,1);
  border-radius: 15px;
  border:none;
}

</style>

<section class="elementor-section elementor-top-section elementor-element elementor-element-2bf47c1a elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="2bf47c1a" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}" style="font-family: 'lora', sans-serif;">
   <div class="container" >
      <div class="row" style="margin: 80px 0px;">
        <div class="card card-1">
          <div class="card-body">
        <div class="success-animation">
<svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"><circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none" /><path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" /></svg>
</div>
             <p style="font-size: 24px;display: flex; justify-content: center;text-align:center;color: green;">Congratulations, Your booking has been created successfully!<br>Our team will get in touch with you soon!<br><br>Booking confirmation details have been sent to your email.</p> 
             <div style="text-align:center;">
             <button type="button" style="font-size: 13px;padding: 10px 20px;border-radius: 2px;background: #ff424c; border: none;" class="btn btn-primary" onclick="window.location.href = 'https://askpinkypromise.com/tele-consult/';">Book another slot</button>
             </div>
             </div>  
             
             </div>   
      </div>
   </div>

</section>
@endsection
@section('footer')

@endsection