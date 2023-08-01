<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="">
      <meta name="keywords" content="">
      <meta name="author" content="">
      <link rel="icon" href="{{asset('public/logo.png')}}" type="image/x-icon">
      <link rel="shortcut icon" href="{{asset('public/logo.png')}}" type="image/x-icon">
      <title>Pinkypromise Admin Login </title>
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
      <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/vendors/font-awesome.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/vendors/icofont.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/vendors/themify.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/vendors/flag-icon.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/vendors/feather-icon.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/vendors/bootstrap.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/style.css')}}">
      <link id="color" rel="stylesheet" href="{{asset('public/assets/css/color-1.css')}}" media="screen">
      <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/responsive.css')}}">
      <style type="text/css">
         .login-form .form-group .input-group-text {
         background-color: #ff424c;
         border: none;
         color: white;
         }
         .show-hide span {
         cursor: pointer;
         font-size: 13px;
         color: #ff424c;
      </style>
   </head>
   <body style="background: #ff424c">
      <section>         </section>
      <div class="container-fluid p-0">
         <div class="row">
            <div class="col-12">
               <div class="login-card">
                  <form class="theme-form login-form" action="{{route('post-login')}}" method="post">
                        {{csrf_field()}}
                     <h4>Login</h4>
                     <h6>Welcome back! Log in to your account.</h6>
                     @if(Session::has('message'))
                        <div class="alert {{ Session::get('alert-class', 'alert-info') }} alert-dismissible fade show" role="alert">{{ Session::get('message') }}
                           <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close" data-bs-original-title="" title=""></button>
                        </div>
                        @endif
                     <div class="form-group">
                        <label>Email Address</label>
                        <div class="input-group"><span class="input-group-text"><i class="icon-email"></i></span>
                          <input type="email" class="form-control" name="email" id="email" value="{{isset($_COOKIE['email'])?$_COOKIE['email']:''}}" placeholder="test@gmail.com">
                        </div>
                     </div>
                     <div class="form-group">
                        <label>Password</label>
                        <div class="input-group">
                           <span class="input-group-text"><i class="icon-lock"></i></span>
                           <input type="password" class="form-control" placeholder="Password" name="password" id="password" value="{{isset($_COOKIE['password'])?$_COOKIE['password']:''}}">
                           <div class="show-hide" >
                              <a href="javascript:;" onclick="changeflow()" id="show_class"><i class="fa fa-eye"></i></a>
                           </div>
                        </div>
                     </div>

                     <div class="form-group">
                        <div class="checkbox">
                           @if(isset($_COOKIE['rem_me'])&&$_COOKIE['rem_me']=='1')
                              <input name="rem_me" id="rem_me" value="1" type="checkbox" checked class="form-check-input">
                              @else
                              <input name="rem_me" id="rem_me" value="1" type="checkbox" class="form-check-input">
                              @endif
                           <label for="rem_me">Remember password</label>
                        </div>
                     </div>
                     <div class="form-group">
                        <button class="btn btn-primary btn-block" style="background: #ff424c" type="submit">Sign in</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <script src="{{asset('public/assets/js/jquery-3.5.1.min.js')}}"></script>
      <script src="{{asset('public/assets/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('public/assets/js/icons/feather-icon/feather.min.js')}}"></script>
      <script src="{{asset('public/assets/js/icons/feather-icon/feather-icon.js')}}"></script>
      <script src="{{asset('public/assets/js/config.js')}}"></script>
      <script src="{{asset('public/assets/js/script.js')}}"></script>
      <script>
         function changeflow(){
            var type = $("#password").attr('type');
            if(type=="password"){
               $("#password").attr('type',"text");
               $("#show_class").html('<i class="fa fa-eye-slash"></i>');
            }else{
               $("#password").attr('type',"password");
               $("#show_class").html('<i class="fa fa-eye"></i>');
            }
         }
      </script>
   </body>
</html>