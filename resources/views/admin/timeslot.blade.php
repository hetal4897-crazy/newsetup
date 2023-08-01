@extends('admin.layout.index')
@section('title')
TimeSlot List
@stop
@section('breadcrumb')
<div class="col-12 col-sm-6">
   <div class="col-12 col-sm-6">
   <span style="font-size: 24px;font-weight: 500;">Time slot List</span>
</div>
</div>
<div class="col-12 col-sm-6">
   <ol class="breadcrumb">
      <li class="breadcrumb-item">
         <a class="home-item" href="{{route('dashboard')}}"><i class="fa fa-home"></i></a>
      </li>
      <li class="breadcrumb-item">Time slot List</li>
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
                    
                    <div class="row">
                        <a href="{{route('save-slot')}}" class="btn btn-primary col-md-1" style="margin-bottom: 15px;padding: 0.375rem 0.75rem;">Add Slot</a>
                    </div>
                    <div class="dt-ext table-responsive">
                      <table class="display" id="responsive">
                        <thead>
                          <tr>
                            <th>SL</th>
                            <th>Date</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                           
                        </tbody>
                        <tfoot>
                          <tr>
                            <th>SL</th>
                            <th>Date</th>
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
        ajax: '{{route("timeslot-data-table")}}',
        columns: [{  data: 'DT_RowIndex',
                     name: 'DT_RowIndex',
                     orderable: false,
                     searchable: false 
                  },{
                       data: 'date',
                       name: 'date'
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


 


  
</script>
@stop

