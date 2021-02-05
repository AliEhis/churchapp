@extends('layouts.admin')
 @section('title')
 Clients
 @endsection
 @section('content')

 <section class="content">
    <div class="row">
      <div class="col-md-12">

        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Clients
            </h3>
            <!-- tools box -->
            <div class="pull-right box-tools">
              <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip"
                      title="Collapse">
                <i class="fa fa-minus"></i></button>
              <button type="button" class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip"
                      title="Remove">
                <i class="fa fa-times"></i></button>
            </div>
            <!-- /. tools -->
          </div>
          <!-- /.box-header -->
          <div class="box-body pad">
            <button type="button" class="btn btn-primary btn-xs"  data-toggle="modal" data-target="#createClientModal"><i class="menu-item-icon icon ion-ios-plus-outline tx-20"></i> Add Clients </button>
<div class="row row-sm mg-t-50">
@foreach($clients as $gallery)
          <div class="col-lg-4">
            <div class="card pd-20 pd-sm-10">
              <div class="card bd-0 wd-xs-200">
                <img class="card-img-top img-fluid" src="{{URL::to($gallery->image)}}" alt="Image" height="100" width="300">
                <div class="card-body bd bd-t-0">
                  <div class="col-lg-12">
            <button type="button" onclick="deleteContact({{ $gallery->id }})" class="btn btn-danger pd-x-20" data-dismiss="modal">Delete</button>
            </div>
                </div>
              </div>
            </div><!-- card -->
          </div><!-- col-6 -->
@endforeach
        </div><!-- row -->

    </div>
</div>
</div>
<!-- /.box -->

</div>
<!-- /.col-->
</div>
<!-- ./row -->
</section>

@include('modals.add_clients')
<script>
    function deleteContact(id) {

event.preventDefault();

if (confirm("Are you sure?")) {

    $.ajax({
        url: 'delete/clients/' + id,
        method: 'get',
        success: function(result){
            window.location.assign(window.location.href);
        }
    });

} else {

    console.log('Delete process cancelled');

}

}
</script>
@endsection
