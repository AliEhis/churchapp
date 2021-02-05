@extends('layouts.admin')
@section('title')
Connection Group
@endsection
@section('content')
<section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-body">
            <a href="{{ route('cms.aboutWelcomeCreate') }}">
              <button class="btn btn-primary" type="button">Create</button>
            </a>
            <table id="example" class="table table-bordered table-hover display nowrap margin-top-10">
              <thead>
                <tr>
                  <th class="wd-10p">#</th>
                  <th class="wd-15p">Heading</th>
                  <th class="wd-15p">Text</th>
                  <th class="wd-15p">Sunday Time</th>
                  <th class="wd-15p">Service heading</th>
                  <th class="wd-15p">mid week Time</th>
                  <th class="wd-15p">Button Text 2</th>
                  <th class="wd-15p">Button Text</th>
                  <th class="wd-15p">Type</th>
                  <th class="wd-15p">Image</th>
                </tr>
              </thead>
              <tbody>
                @if(count($box) < 1)
                  <tr>
                    <th colspan="5" style="text-align:center; font-size:20px">No record currently available</th>
                  </tr>
                @else
                  @foreach($box as $key => $item)
                    <tr>
                      <td>{{ ++$key }}</td>
                      <td>{{ $item->heading }}</td>
                      <td>{{ $item->text }}</td>
                      <td>{{ $item->sunday_time }}</td>
                      <td>{{ $item->service_heading }}</td>
                      <td>{{ $item->midweek_time }}</td>
                      <td>{{ $item->btn_text2 }}</td>
                      <td>{{ $item->btn_text }}</td>
                      <td>{{ $item->type }}</td>
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
