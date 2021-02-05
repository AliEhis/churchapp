@extends('layouts.admin')
@section('title')
Mission
@endsection
@section('content')
<section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-body">
            <a href="{{ route('cms.create_mission') }}">
              <button class="btn btn-primary" type="button">Create</button>
            </a>
            <table id="example" class="table table-bordered table-hover display nowrap margin-top-10">
              <thead>
                <tr>
                  <th class="wd-10p">#</th>
                  <th class="wd-15p">Title</th>
                  <th class="wd-15p">Content</th>
                  <th class="wd-15p">Image1</th>
                  <th class="wd-15p">Image2</th>
                  <th class="wd-15p">Image3</th>
                  <th class="wd-15p">Image4</th>
                </tr>
              </thead>
              <tbody>
                @if(count($missions) < 1)
                  <tr>
                    <th colspan="5" style="text-align:center; font-size:20px">No record currently available</th>
                  </tr>
                @else
                  @foreach($missions as $key => $item)
                    <tr>
                      <td>{{ ++$key }}</td>
                      <td>{{ $item->title }}</td>
                      <td>{{ $item->content }}</td>
                      <td>
                        @if ($item->image1 !== NULL)
                          <a href="{{ $item->image1 }}" target="_blank">
                            <button class="btn btn-success" type="button">Preview</button>
                          </a>  
                        @else
                          No preview available
                        @endif
                      </td>
                      <td>
                        @if ($item->image2 !== NULL)
                          <a href="{{ $item->image2 }}" target="_blank">
                            <button class="btn btn-success" type="button">Preview</button>
                          </a>  
                        @else
                          No preview available
                        @endif
                      </td>
                      <td>
                        @if ($item->image3 !== NULL)
                          <a href="{{ $item->image3 }}" target="_blank">
                            <button class="btn btn-success" type="button">Preview</button>
                          </a>  
                        @else
                          No preview available
                        @endif
                      </td>
                      <td>
                        @if ($item->image4 !== NULL)
                          <a href="{{ $item->image4 }}" target="_blank">
                            <button class="btn btn-success" type="button">Preview</button>
                          </a>  
                        @else
                          No preview available
                        @endif
                      </td>
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
