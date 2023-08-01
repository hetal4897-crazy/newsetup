<!DOCTYPE html>
<html lang="en" style="--theme-deafult: #0E7C7B;--theme-secondary: #ffffff;"> 
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="pinkypromise">
    <meta name="keywords" content="">
    <meta name="author" content="Hetal">
    <link rel="icon" href="{{asset('public/logo.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('public/logo.png')}}" type="image/x-icon">
    <title>@yield('title')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/vendors/font-awesome.css')}}">
    
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/vendors/icofont.css')}}">
    
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/vendors/themify.css')}}">
   
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/vendors/flag-icon.css')}}">
    
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/vendors/feather-icon.css')}}">
    
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/vendors/scrollbar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/vendors/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/vendors/date-picker.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/vendors/photoswipe.css')}}">
   
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/vendors/bootstrap.css')}}">
    
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/style.css')}}">
    <link id="color" rel="stylesheet" href="{{asset('public/assets/css/color-1.css')}}" media="screen">
    
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/responsive.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/vendors/datatables.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/vendors/datatable-extension.css')}}">
     <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/vendors/select2.css')}}">
 <link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/css/intlTelInput.css" rel="stylesheet" media="screen">
 <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/vendors/sweetalert2.css')}}">
    
<link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/vendors/date-picker.css')}}">


    
  </head>
  <body>     
    
    <div class="loader-wrapper">
      <div class="loader">
        <div class="loader-bar"></div>
        <div class="loader-bar"></div>
        <div class="loader-bar"></div>
        <div class="loader-bar"></div>
        <div class="loader-bar"></div>
        <div class="loader-ball"></div>
      </div>
    </div>
    
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
   
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
    
      <div class="page-header">
        <div class="header-wrapper row m-0"> 
          @include('admin.layout.header')
        </div>
      </div>
      <!-- Page Header Ends                              -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        <div class="sidebar-wrapper"> 
          <div>
            @include('admin.layout.sidemenu')
        </div>
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">        
            <div class="page-title">
              <div class="row">
                 @yield('breadcrumb')
                
              </div>
            </div>
          </div>
          
          <div class="container-fluid default-dash">
            <div class="row"> 
                @yield('content')
            </div>
          </div>         
        </div>
       
        @include('admin.layout.footer')
      </div>
    </div>
    <script src="{{asset('public/assets/js/jquery-3.5.1.min.js')}}"></script>
   
    <script src="{{asset('public/assets/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
   
    <script src="{{asset('public/assets/js/icons/feather-icon/feather.min.js')}}"></script>
    <script src="{{asset('public/assets/js/icons/feather-icon/feather-icon.js')}}"></script>
  
    <script src="{{asset('public/assets/js/scrollbar/simplebar.js')}}"></script>
    <script src="{{asset('public/assets/js/scrollbar/custom.js')}}"></script>
  
    <script src="{{asset('public/assets/js/config.js')}}"></script>
 
    <script src="{{asset('public/assets/js/sidebar-menu.js')}}"></script>
   <script src="{{asset('public/assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('public/assets/js/datatable/datatable-extension/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('public/assets/js/datatable/datatable-extension/jszip.min.js')}}"></script>
    <script src="{{asset('public/assets/js/datatable/datatable-extension/buttons.colVis.min.js')}}"></script>
    <script src="{{asset('public/assets/js/datatable/datatable-extension/pdfmake.min.js')}}"></script>
    <script src="{{asset('public/assets/js/datatable/datatable-extension/vfs_fonts.js')}}"></script>
    <script src="{{asset('public/assets/js/datatable/datatable-extension/dataTables.autoFill.min.js')}}"></script>
    <script src="{{asset('public/assets/js/datatable/datatable-extension/dataTables.select.min.js')}}"></script>
    <script src="{{asset('public/assets/js/datatable/datatable-extension/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('public/assets/js/datatable/datatable-extension/buttons.html5.min.js')}}"></script>
    <script src="{{asset('public/assets/js/datatable/datatable-extension/buttons.print.min.js')}}"></script>
    <script src="{{asset('public/assets/js/datatable/datatable-extension/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('public/assets/js/datatable/datatable-extension/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('public/assets/js/datatable/datatable-extension/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('public/assets/js/datatable/datatable-extension/dataTables.keyTable.min.js')}}"></script>
    <script src="{{asset('public/assets/js/datatable/datatable-extension/dataTables.colReorder.min.js')}}"></script>
    <script src="{{asset('public/assets/js/datatable/datatable-extension/dataTables.fixedHeader.min.js')}}"></script>
    <script src="{{asset('public/assets/js/datatable/datatable-extension/dataTables.rowReorder.min.js')}}"></script>
    <script src="{{asset('public/assets/js/datatable/datatable-extension/dataTables.scroller.min.js')}}"></script>

    <script src="{{asset('public/assets/js/select2/select2.full.min.js')}}"></script>
    <script src="{{asset('public/assets/js/select2/select2-custom.js')}}"></script>
    
   <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/intlTelInput.min.js"></script> 

   <script src="{{asset('public/assets/js/sweet-alert/sweetalert.min.js')}}"></script>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/intlTelInput.js"></script> 
   
    <script src="{{asset('public/assets/js/height-equal.js')}}"></script>
   <script src="{{asset('public/assets/js/script.js')}}"></script>
    <script src="{{asset('public/assets/js/datepicker/date-picker/datepicker.js')}}"></script>
    <script src="{{asset('public/assets/js/datepicker/date-picker/datepicker.en.js')}}"></script>
    <script src="{{asset('public/assets/js/datepicker/date-picker/datepicker.custom.js')}}"></script>
    
    @yield('footer')
     
    
  </body>
</html>