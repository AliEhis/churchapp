@extends('layouts.admin')
@section('title')
Church Department
@endsection

@section('content')

<section class="content">
    <div class="row">
      <div class="col-xs-12">

        <div class="box">
   
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example" class="table table-bordered table-hover display nowrap margin-top-10">
              <thead>
                  <tr>
                    <th class="wd-10p">#</th>
                    <th class="wd-15p">Department</th>
                    <th class="wd-15p">Head</th>
                    <th class="wd-15p">Description</th>
                    <th class="wd-15p">Date</th>
                    <th class="wd-15p">Actions</th>
                  </tr>
              </thead>
              <tbody>
                @if(count($departments) < 1)
                <tr>
                    <th style="text-align:center, font-size:20px">No record currently available</th>
                </tr>
                @else
                @foreach($departments as $key=>$state)
                <tr>
                    <td>{{++$key}}</td>
                    <td>{{$state->title}}</td>
                    <td>{{$state->department_head}}</td>                 
                    <td>{{$state->description}}</td>                 
                    <td>{{ date('M j, Y h:ia', strtotime($state->created_at)) }}</td>
                    {{-- <td> --}}
                    {{-- <a  onclick="deleteContact({{ $state->id }})">
                      <a href="#" class="btn btn-danger btn-icon mg-r-5 mg-b-10" onclick="deleteContact({{ $state->id }})"><i class="icon ion-ios-trash-outline tx-24"></i> Edit</a></a>
                    </a> --}}
                    <td><a onclick="deleteDepartment({{ $state->id }})" class="btn btn-danger" style="color:white">Delete</a></td>

                    {{-- <a  onclick="deleteDepartment({{ $state->id }})">
                      <a href="#" class="btn btn-danger btn-icon mg-r-5 mg-b-10" onclick="deleteDepartment({{ $state->id }})"><i class="icon ion-ios-trash-outline tx-24"></i> Trash</a></a>
                    </a> --}}
                    {{-- </td> --}}
                    </tr>
                  @endforeach
                  @endif
                </tbody>

          </table>

          <input type="hidden" name="page" value="department">
          <input type="hidden" name="id" value="" id="department_id">
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

    function deleteDepartment(id) {
      event.preventDefault();
      if (confirm("Are you sure?")) {
        $.ajax({
          url: 'delete/department/' + id,
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
