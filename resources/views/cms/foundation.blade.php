@extends('layouts.admin')
@section('title')
Foundation class
@endsection
@section('content')
<section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-body">
            <a href="{{ route('cms.foundationCreate') }}">
              <button class="btn btn-primary" type="button">Create</button>
            </a>
            <table id="example" class="table table-bordered table-hover display nowrap margin-top-10">
              <thead>
                <tr>
                  <th class="wd-10p">#</th>
                  <th class="wd-15p">Name</th>
                  <th class="wd-15p">Description</th>
                  <th class="wd-15p">Duration</th>
                  <th class="wd-15p">Date created</th>
                </tr>
              </thead>
              <tbody>
                @if(count($foundations) < 1)
                  <tr>
                    <th colspan="5" style="text-align:center; font-size:20px">No record currently available</th>
                  </tr>
                @else
                  @foreach($foundations as $key => $item)
                    <tr>
                      <td>{{ ++$key }}</td>
                      <td>{{ $item->name }}</td>
                      <td>{{ $item->description }}</td>                 
                      <td>{{ $item->duration }}</td>
                      <td>{{ date('M j, Y h:ia', strtotime($item->created_at)) }}</td>
                      <td>
                        <a onclick="deleteFoundation({{ $item->id }})" class="btn btn-danger" style="color:white">Delete</a></td>
                    </tr>
                  @endforeach
                @endif
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script>
    function showMessage (id) {
      $('#' + id).modal('show');
    }
    function deleteFoundation (id) {
      event.preventDefault();
      if (confirm("Are you sure?")) {
        $.ajax({
          url: 'delete/foundation/' + id,
          method: 'get',
          success: function(result){
            window.location.assign(window.location.href);
          }
        });
      }
    }

  </script>
@endsection
