@extends('layouts.admin')
@section('title')
Pending Feedbacks
@endsection

@section('content')

<section class="content">
    <div class="row">
      <div class="col-xs-12">

        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Pending Feedbacks</h3>
            <h6 class="box-subtitle">Sorting is from the most recent.</h6>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example" class="table table-bordered table-hover display nowrap margin-top-10">
              <thead>
                  <tr>
                    <th class="wd-10p">#</th>
                    <th class="wd-15p">Name</th>
                    <th class="wd-15p">Title</th>
                    <th class="wd-15p">Content</th>
                    <th class="wd-15p">Date</th>
                    <th class="wd-15p">Action</th>
                  </tr>
              </thead>
              <tbody>
                @if(count($volunteers) < 1)
                <tr>
                    <th>No record currently available</th>
                </tr>
                @else
                @foreach($volunteers as $key=>$state)
                <tr>
                    <td>{{++$key}}</td>
                    <td>{{$state->name}}</td>
                    <td>{{$state->title}}</td>
                    <td>{!! $state->body !!}</td>
                    <td>{{ date('M j, Y h:ia', strtotime($state->created_at)) }}</td>
                    <td>
                    <a  onclick="deleteContact({{ $state->id }})">
                      <a href="#" class="btn btn-danger btn-icon mg-r-5 mg-b-10" onclick="deleteContact({{ $state->id }})"><i class="icon ion-ios-trash-outline tx-24"></i> Trash</a></a>
                    </a>
                    <a onclick="fetchPost({{ $state->id }})">
                        <button type="submit" class="btn btn-primary pd-x-20" data-toggle="modal" data-target="#editpendingfeedbacksModal">Approve</button>
                      </a>
                    </td>
                    </tr>
                  @endforeach
                  @endif
                </tbody>

          </table>


          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->


      @include('modals.edit_feedbacks')
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->

  <script>

    function fetchPost(id) {

    event.preventDefault();

    $.ajax({
    url: 'pendingfeedbacks/' + id,
    method: 'get',
    success: function(result){
        console.log(result);
        $('#nameEdit').val(result.name);
        $('#titleEdit').val(result.title);
        $('#statusEdit').val(result.status);
        $('#bodyEdit').val(result.body);
        var url = 'pendingfeedbacks/' + id;
        $('form#pendingfeedbacks').attr('action', url);
        $('#editpendingfeedbacksModal').modal('show');
    }
    });

    }
    </script>
  <script>


    function deleteContact(id) {

        event.preventDefault();

        if (confirm("Are you sure?")) {

            $.ajax({
                url: 'delete/pendingfeedbacks/' + id,
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
