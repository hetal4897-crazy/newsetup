@extends('admin.layout.index')
@section('title')
Save TimeSlot
@stop
@section('breadcrumb')
<div class="col-12 col-sm-6">
   <div class="col-12 col-sm-6">
   <span style="font-size: 24px;font-weight: 500;">Save TimeSlot</span>
</div>
</div>
<div class="col-12 col-sm-6">
   <ol class="breadcrumb">
      <li class="breadcrumb-item">
         <a class="home-item" href="{{route('dashboard')}}"><i class="fa fa-home"></i></a>
      </li>
      <li class="breadcrumb-item">
         <a class="home-item" href="{{route('timeslot')}}">Timeslot</a>
      </li>
      <li class="breadcrumb-item">Save TimeSlot</li>
   </ol>
</div>
@stop
@section('content')
<style type="text/css">
  .custom-slot-design-box ul {
    list-style: none;
    padding-left: 0px;
}
@media only screen and (max-width: 300px) {
  .custom-slot-design-box li {
      display: inline-block;
      width: 30%;
      margin-right: 6px;
  }
}
@media only screen and (min-width: 600px) {
  .custom-slot-design-box li {
      display: inline-block;
      width: 15%;
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
</style>
 <div class="col-sm-12">
                <div class="card">
              
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="date-picker">
                      <form class="theme-form" action="{{route('post-timeslot')}}" method="post">
                         {{csrf_field()}}
                         <input type="hidden" name="id" value="{{$date}}">
                        <div class="mb-3 row g-3">
                          <label class="col-sm-3 col-form-label text-sm-end">Select Date</label>
                          <div class="col-xl-5 col-sm-9">
                            <div class="input-group">
                              <input class="datepicker-here form-control digits" type="text" name="date" value="{{$date}}" data-language="en">
                            </div>
                          </div>
                        </div>
                        <div class="row custom-slot-design-box">
                          <ul>
                              <?php $i=0;?>
                              @foreach($ls as $gv)
                               
                                <li><input type="checkbox"  name="slot[]" id="slot_{{$i}}" value="{{$gv['slot']}}" <?=$gv['is_sel']==1?'checked="checked"':''?> onchange="selected_slot_val('{{$i}}')"><label for="slot_{{$i}}" class=" <?=$gv['is_sel']==1?'sel_slot':''?> nslot" id="label_{{$i}}">{{$gv['slot']}}</label></li>
                                <?php $i++;?>
                              @endforeach
                          </ul>
                          
                        </div>
                        <div class="row">
                            <button class="btn btn-primary" type="submit">
                                Submit
                            </button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
              </div>
@stop
@section('footer')
<script type="text/javascript">
  function selected_slot_val(id){
    //$(".nslot").removeClass("sel_slot");
     if($("#slot_"+id).prop("checked")==true){
        $("#label_"+id).addClass("sel_slot");
     }else{
        $("#label_"+id).removeClass("sel_slot");
     }
    

  }
</script>
@stop

