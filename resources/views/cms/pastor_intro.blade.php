@extends('layouts.admin')
@section('title')
featured box
@endsection
@section('content')
<section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-body">
            <a href="{{ route('cms.pastorIntro') }}">
              <button class="btn btn-primary" type="button">Create</button>
            </a>
            <table id="example" class="table table-bordered table-hover display nowrap margin-top-10">
              <thead>
                <tr>
                  <th class="wd-10p">#</th>
                  <th class="wd-15p">Title</th>
                  <th class="wd-15p">Pastor Name</th>
                  <th class="wd-15p">Pastor Position</th>
                  <th class="wd-15p">Content</th>
                  <th class="wd-15p">Image</th>
                </tr>
              </thead>
              <tbody>
                @if(count($intro) < 1)
                  <tr>
                    <th colspan="5" style="text-align:center; font-size:20px">No record currently available</th>
                  </tr>
                @else
                  @foreach($intro as $key => $item)
                    <tr>
                      <td>{{ ++$key }}</td>
                      <td>{{ $item->title }}</td>
                      <td>{{ $item->pastor_name }}</td>
                      <td>{{ $item->pastor_position }}</td>
                      <td>{{ $item->content }}</td>
                      <td>
                        <a href="{{ $item->image }}">
                          <button class="btn btn-success" type="button">Preview</button>
                        </a>  
                      </td>                 
                      {{-- <td>{{ date('M j, Y h:ia', strtotime($item->created_at)) }}</td>
                      <td>
                        <a onclick="deleteFoundation({{ $item->id }})" class="btn btn-danger" style="color:white">Delete</a></td> --}}
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
    function deleteLesson (id) {
      event.preventDefault();
      if (confirm("Are you sure?")) {
        $.ajax({
          url: 'delete/lesson/' + id,
          method: 'get',
          success: function(result){
            window.location.assign(window.location.href);
          }
        });
      }
    }

  </script>
@endsection
