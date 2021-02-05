@extends('layouts.admin')
@section('title')
Lessons
@endsection
@section('content')
<section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-body">
            <a href="{{ route('cms.lessonCreate') }}">
              <button class="btn btn-primary" type="button">Create</button>
            </a>
            <table id="example" class="table table-bordered table-hover display nowrap margin-top-10">
              <thead>
                <tr>
                  <th class="wd-10p">#</th>
                  <th class="wd-15p">Title</th>
                  <th class="wd-15p">Pastor</th>
                  <th class="wd-15p">Video</th>
                  <th class="wd-15p">Date created</th>
                  <th class="wd-15p">Action</th>
                </tr>
              </thead>
              <tbody>
                @if(count((array)$levels) < 1)
                {{-- @if(count($levels) < 1) --}}
                  <tr>
                    <th colspan="5" style="text-align:center; font-size:20px">No record currently available</th>
                  </tr>
                @else 
                  @foreach($levels->levelLesson as $key => $value)
                    <tr>
                      <td>{{ $key + 1 }}</td>
                      <td>{{ $value->title }}</td>
                      <td>{{ $value->bible }}</td>
                      <td>
                        <a href="{{ $value->video }}">
                          <button class="btn btn-success" type="button">Preview</button>
                        </a>  
                      </td>                 
                      <td>{{ date('M j, Y h:ia', strtotime($value->created_at)) }}</td>
                      <td><a onclick="deleteFoundation({{ $value->id }})" class="btn btn-danger" style="color:white">Delete</a></td>
                      <td><a href="{{ route('cms.levelQuestionCreate', ['classId'=>$value->id]) }}" class="btn btn-primary" style="color:white">Add Question</a></td>
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
