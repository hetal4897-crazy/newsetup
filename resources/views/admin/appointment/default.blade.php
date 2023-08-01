@extends('admin.layout.index')
@section('title')
Appointment List
@stop
@section('breadcrumb')
<div class="col-12 col-sm-6">
   <div class="col-12 col-sm-6">
   <span style="font-size: 24px;font-weight: 500;">Appointment List</span>
</div>
</div>
<div class="col-12 col-sm-6">
   <ol class="breadcrumb">
      <li class="breadcrumb-item">
         <a class="home-item" href="{{route('dashboard')}}"><i class="fa fa-home"></i></a>
      </li>
      <li class="breadcrumb-item">Appointment List</li>
   </ol>
</div>
@stop
@section('content')
 <div class="col-sm-12">
                <div class="card">
                  
                  <div class="card-body">
                     @if(Session::has('message'))
                        <div class="alert {{ Session::get('alert-class', 'alert-info') }} alert-dismissible fade show" role="alert">{{ Session::get('message') }}
                           <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close" data-bs-original-title="" title=""></button>
                        </div>
                        @endif
                    
                    
                    <div class="dt-ext table-responsive">
                      <table class="display" id="responsive">
                        <thead>
                          <tr>
                            <th>SL</th>
                            <th>Name</th>
                            
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Invoice Date</th>
                            <th>Booking Date</th>
                            <th>Booking Time</th>
                            <th>Status</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                           
                        </tbody>
                        <tfoot>
                          <tr>
                            <th>SL</th>
                            <th>Name</th>
                            
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Invoice Date</th>
                            <th>Booking Date</th>
                            <th>Booking Time</th>
                            <th>Status</th>
                            <th>Action</th>
                          </tr>
                        </tfoot>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
@stop
@section('footer')
<script type="text/javascript">
   $('#responsive').DataTable( {
        responsive: true,
        processing: true,
        serverSide: true,
        ajax: '{{route("appointment-data-table")}}',
        columns: [{  data: 'DT_RowIndex',
                     name: 'DT_RowIndex',
                     orderable: false,
                     searchable: false 
                  },{
                       data: 'name',
                       name: 'name'
                  },{
                       data: 'email',
                       name: 'email'
                  },{
                       data: 'phone',
                       name: 'phone'
                  },{
                       data: 'created_at',
                       name: 'created_at'
                  },{
                       data: 'date',
                       name: 'date'
                  },{
                       data: 'time',
                       name: 'time'
                  },{
                       data: 'status',
                       name: 'status'
                  },{
                       data: 'action',
                       name: 'action'
                  }
        ],columnDefs: [

        ],
   order: [
       [0, "DESC"]
   ]
    } );


 function changestatus(val,status){
     
      var msg = "Are you sure want to cancel this appointment?";
      
       swal({
                    title: msg,
                    text: "",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                         changestatusurl(val,status);
                    } else {
                         window.location.reload();    
                    }
                })
      
   }

   function changestatusurl(id,status){
            $.ajax({
                      url: '{{route("cancel-appointement")}}',
                      data: {id:id,status:status},
                      success: function( data ) {
                          
                          window.location.reload();     
                      }
            });
   }


  
</script>
@stop

