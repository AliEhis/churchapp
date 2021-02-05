@extends('layouts.admin')
@section('title')
Announcement
@endsection

@section('content')

<section class="content">
    <button type="submit" class="btn btn-primary mg-r-5" data-toggle="modal" data-target="#modaldemo1"><i class="menu-item-icon icon ion-ios-plus-outline tx-20"></i> Add Announcement</button>
    <div class="row">
      <div class="col-xs-12">

        <div class="box">
          <div class="box-header">
            <h3 class="box-title">All Announcements</h3>
            <h6 class="box-subtitle">Sorting is from the most recent.</h6>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example" class="table table-bordered table-hover display nowrap margin-top-10">
              <thead>
                  <tr>
                    <th class="wd-10p">#</th>
                    <th class="wd-15p">Title</th>
                    <th class="wd-15p">Description</th>
                    <th scope="wd-15p">Date</th>
                    <th class="wd-15p">Action</th>
                  </tr>
              </thead>
              <tbody>
                @if(count($prayerlist) < 1)
                <tr>
                    <th>No record currently available</th>
                </tr>
                @else
                @foreach($prayerlist as $key=>$state)
                <tr>
                    <td>{{++$key}}</td>
                    <td>{{$state->title}}</td>
                    <td>{!!$state->body !!}</td>
                    <td>{{ date('M j, Y h:ia', strtotime($state->created_at)) }}</td>
                    <td>
                    <a  onclick="deleteContact({{ $state->id }})">
                      <a href="#" class="btn btn-danger btn-icon mg-r-5 mg-b-10" onclick="deleteContact({{ $state->id }})"><i class="icon ion-ios-trash-outline tx-24"></i> Trash</a></a>
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



    </div>
    <!-- /.row -->
        <!-- BASIC MODAL -->
        <div id="modaldemo1" class="modal fade">
            <div class="modal-dialog modal-dialog-vertical-center" role="document">
              <div class="modal-content bd-0 tx-14">
                <div class="modal-header pd-y-20 pd-x-25">
                  <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Add Announcement</h6>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body pd-25">
                <form  action="{{ route('cms.store', ['page' => 'announcement'])}}" method="POST" enctype="multipart/form-data">
                  {{csrf_field()}}
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Post Title</label>
                                <input type="text" name="title" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Body</label>
                                <textarea name="body" class="form-control" id="summernote" required></textarea>
                            </div>
                        </div>
                    </div>


                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary pd-x-20">Save</button>
                  <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
                </div>
                </form>
              </div>
              </div>
            </div><!-- modal-dialog -->

          </div><!-- modal -->

  </section>
  <!-- /.content -->
  <script>

    function showMessage(id) {
        $('#' + id).modal('show');
    }

    function deleteContact(id) {

        event.preventDefault();

        if (confirm("Are you sure?")) {

            $.ajax({
                url: 'delete/announcement/' + id,
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
