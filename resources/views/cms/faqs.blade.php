@extends('layouts.admin')
 @section('title')
 FAQ
 @endsection
 @section('content')


 <section class="content">

    <!-- START ALERTS AND CALLOUTS -->

    <button type="submit" class="btn btn-primary mg-r-5" data-toggle="modal" data-target="#modaldemo1"><i class="menu-item-icon icon ion-ios-plus-outline tx-20"></i> Add FAQ</button>

    <div class="row">
        @foreach($faqs as $key=>$service)
      <div class="col-md-6">
        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">{{++$key}}</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="alert alert alert-dismissible">
                <strong>Title:</strong> {{$service->title}}</a><br>
                <br>
                <span class="tx-12"><strong>Content</strong>: {!! $service->body !!}</span>
              <div class="col-lg-12">
                <a onclick="fetchPost({{ $service->id }})">
                  <button type="submit" class="btn btn-primary pd-x-20" data-toggle="modal" data-target="#editnewsModal">Edit</button>
                </a>
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
      @include('modals.add_faq')
      @include('modals.edit_faq')

    </div>


    <!-- END PROGRESS BARS -->

    <!-- END TYPOGRAPHY -->

  </section>
<script>

    function fetchPost(id) {

    event.preventDefault();

    $.ajax({
    url: 'faqs/' + id,
    method: 'get',
    success: function(result){
        console.log(result);
        $('#titleEdit').val(result.title);
        $('#bodyEdit').val(result.body);
        var url = 'faqs/' + id;
        $('form#faqs').attr('action', url);
        $('#editfaqsModal').modal('show');
    }
    });

    }
    </script>
    <script>
        function deleteContact(id) {

    event.preventDefault();

    if (confirm("Are you sure?")) {

        $.ajax({
            url: 'delete/faqs/' + id,
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
