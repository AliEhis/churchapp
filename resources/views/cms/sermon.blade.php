@extends('layouts.admin')
@section('title')
Sermorns
@endsection

@section('content')

<section class="content">
    <div class="row">
      <div class="col-xs-12">

        <div class="box">
          <div class="box-header">
            <h3 class="box-title">All Sermons</h3>
            <h6 class="box-subtitle">Sorting is from the most recent.</h6>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example" class="table table-bordered table-hover display nowrap margin-top-10">
              <thead>
                  <tr>
                    <th class="wd-10p">#</th>
                    <th class="wd-15p">Title</th>
                    <th class="wd-15p">Preacher</th>

                    <th class="wd-15p">Date</th>
                    <th scope="wd-15p">Audio</th>
                    <th class="wd-15p">Overview</th>
                    <th class="wd-15p">Description</th>
                    <th class="wd-15p">Action</th>
                    <th scope="wd-15p">Video</th>

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
                    <td>{{$state->preacher}}</td>

                    <td>{{ date('M j, Y', strtotime($state->date)) }}</td>
                    <td>    <figcaption>Tap to Listen</figcaption>
                        <audio
                            controls
                            src="{!!$state->audio!!}">
                                Your browser does not support the
                                <code>audio</code> element.
                        </audio></td>
                    <td>{{$state->overview}}</td>
                    <td>{!!$state->body!!}</td>
                    <td>
                    <a  onclick="deleteContact({{ $state->id }})">
                      <a href="#" class="btn btn-danger btn-icon mg-r-5 mg-b-10" onclick="deleteContact({{ $state->id }})"><i class="icon ion-ios-trash-outline tx-24"></i> Trash</a></a>
                    </a>
                    </td>
                     <td><iframe src="{!!$state->video!!}"> </td>
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
                url: 'delete/testimony/' + id,
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
