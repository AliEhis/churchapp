@extends('layouts.admin')
@section('title')
New Members
@endsection

@section('content')

<section class="content">
    <div class="row">
      <div class="col-xs-12">

        <div class="box">
          <div class="box-header">
            <h3 class="box-title">All New Members</h3>
            <h6 class="box-subtitle">Sorting is from the most recent.</h6>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example" class="table table-bordered table-hover display nowrap margin-top-10">
              <thead>
                  <tr>
                    <th class="wd-10p">#</th>
                    <th class="wd-15p">Name</th>
                    <th class="wd-15p">Phone</th>
                    <th class="wd-15p">Email</th>
                    <th class="wd-15p">Address</th>
                    <th class="wd-15p">Church Visit</th>
                    <th class="wd-15p">Hear AboutUs</th>
                    <th class="wd-15p">Prayer Point</th>
                    <th class="wd-15p">Date</th>
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
                    <td>{{ $state->name }}</td>
                    <td>{{ $state->phone }}</td>
                    <td>{{ $state->email }}</td>
                    <td>{{ $state->address }}</td>
                    <td>{{ $state->church_visit }}</td>
                    <td>{{ $state->hear_about_us }}</td>
                    <td>{{ $state->prayer_point }}</td>
                    <td>{{ date('M j, Y', strtotime($state->created_at)) }}</td>
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
                url: 'delete/newmember/' + id,
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
