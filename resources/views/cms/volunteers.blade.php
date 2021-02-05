@extends('layouts.admin')
@section('title')
Active Volunteers
@endsection

@section('content')

<section class="content">
    <div class="row">
      <div class="col-xs-12">

        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Active Volunteers</h3>
            <h6 class="box-subtitle">Sorting is from the most recent.</h6>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example" class="table table-bordered table-hover display nowrap margin-top-10">
              <thead>
                  <tr>
                    <th class="wd-10p">#</th>
                    <th class="wd-15p">Name</th>
                    <th class="wd-15p">Email</th>
                    <th class="wd-15p">Phone</th>
                    <th class="wd-15p">Address</th>
                    <th scope="wd-15p">State</th>
                    <th scope="wd-15p">Nationality</th>
                    <th scope="wd-15p">Purpose</th>
                    <th scope="wd-15p">Status</th>
                    <th class="wd-15p">Sex</th>
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
                    <td>{{$state->email}}</td>
                    <td>{{$state->phone}}</td>
                    <td>{!! $state->address !!}</td>
                    <td>{{$state->state}}</td>
                    <td>{{$state->nationality}}</td>
                    <td>{{$state->purpose}}</td>
                    <td>Active</td>
                    <td>{{$state->sex}}</td>
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
                url: 'delete/volunteers/' + id,
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
