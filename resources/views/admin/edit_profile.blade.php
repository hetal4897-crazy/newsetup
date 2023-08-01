@extends('admin.layout.index')
@section('title')
Edit Profile
@stop
@section('breadcrumb')
<div class="col-12 col-sm-6">
   
   <span style="font-size: 24px;font-weight: 500;">Edit Profile</span>
</div>
<div class="col-12 col-sm-6">
   <ol class="breadcrumb">
      <li class="breadcrumb-item">
         <a class="home-item" href="{{route('dashboard')}}"><i class="fa fa-home"></i></a>
      </li>
      <li class="breadcrumb-item">Edit Profile</li>
   </ol>
</div>
@stop
@section('content')
<div class="col-sm-6">
   <div class="card">
                           @if(Session::has('message'))
                        <div class="alert {{ Session::get('alert-class', 'alert-info') }} alert-dismissible fade show" role="alert">{{ Session::get('message') }}
                           <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close" data-bs-original-title="" title=""></button>
                        </div>
                        @endif
      <form action="{{route('update-profile')}}" method="post" enctype="multipart/form-data" >
         {{csrf_field()}}
         <div class="card-body">
            <div class="row g-3">
               <div class="col-md-12">
                  <label class="form-label" for="name">Name <span class="req_field">*</span></label>
                  <input class="form-control" name="name" required="" id="name" type="text" placeholder="Enter Name" value="<?=Auth::user()->name?>">
               </div>
               <div class="col-md-12">
                  <label class="form-label" for="email">Email<span class="req_field">*</span></label>
                  <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email" required="" value="<?=Auth::user()->email?>">
               </div>
               <div class="col-md-12">
                  <label class="form-label" for="password">Password</label>
                  <input type="password" name="password" onchange="confirmpwdrequire()" class="form-control" id="password" placeholder="*************"  value="">
               </div>
               <div class="col-md-12">
                  <label class="form-label" for="cpassword">Confirm Password</label>
                  <input type="password" name="cpassword" onchange="pwdmatch(this.value)" class="form-control" id="cpassword" placeholder="*************"  value="">
               </div>
               
            </div>
         </div>
         <div class="card-footer">
            <button class="btn btn-primary">Submit</button>
            <button class="btn btn-danger">Cancel</button>
         </div>
      </form>
   </div>
</div>
@stop
@section('footer')
<script type="text/javascript">
   function confirmpwdrequire(){
      if($("#password").val()!=""){
         $("#cpassword").attr("required",true);
      }else{
         $("#cpassword").attr("required",false);
      }      
   }

   function pwdmatch(val){
      var npassword = $("#password").val();
      if(npassword!=val){
         swal("Error!", "Password and confirm password not match", "error");
         $("#cpassword").val("");
      }
   }
</script>
@stop