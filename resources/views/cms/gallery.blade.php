@extends('layouts.admin')
 @section('title')
Gallery
 @endsection
 @section('content')


 <section class="content">

    <!-- START ALERTS AND CALLOUTS -->

    <button type="submit" class="btn btn-primary mg-r-5" data-toggle="modal" data-target="#modaldemo1"><i class="menu-item-icon icon ion-ios-plus-outline tx-20"></i> Add Photo</button>
    <div class="row">
        @foreach($galleries as $key=>$service)
      <div class="col-md-6">
        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">{{++$key}}</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <img src="{{URL::to($service->image)}}" alt="" height="300" width="500">
            <div class="alert alert alert-dismissible">
                <strong>Title:</strong> {{$service->title}}</a><br>
                <br>
              <div class="col-lg-12">
                  <button type="button" onclick="deleteContact({{ $service->id }})" class="btn btn-danger pd-x-20" data-dismiss="modal">Delete</button>
                  </div>
            </div>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
      @endforeach
      @include('modals.addgallery')

    </div>


    <!-- END PROGRESS BARS -->

    <!-- END TYPOGRAPHY -->

  </section>

    <script>
        function deleteContact(id) {

    event.preventDefault();

    if (confirm("Are you sure?")) {

        $.ajax({
            url: 'delete/gallery/' + id,
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
