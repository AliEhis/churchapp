@extends('layouts.admin')
@section('title')
    Events
@endsection
@section('content')


<section class="content">
    <div class="row">
      <div class="col-xs-12">

        <div class="box">
            <button type="button" class="btn btn-primary btn-xs"  data-toggle="modal" data-target="#modaldemo1"><i class="menu-item-icon icon ion-ios-plus-outline tx-20"></i> Create Event </button>
          <div class="box-header">
            <h3 class="box-title">Posts List</h3>
            <h6 class="box-subtitle">Sorting is from the most recent.</h6>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
            @endif
            <table id="example" class="table table-bordered table-hover display nowrap margin-top-10">
              <thead>
                  <tr>
                    <th>SL.</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Category</th>
                    <th><i class="fa fa-eye p-t-10"></i></th>
                    <th>Is Approved</th>
                    <th>Status</th>
                    <th><i class="fa fa-comments p-t-10"></i></th>
                    <th width="150">Action</th>
                  </tr>
              </thead>
              <tbody>
                @foreach( $events as $key => $post )
                <tr>
                    <td>{{$key+1}}</td>
                    <td>
                            <img src="{{URL::asset($post->image)}}" alt="{{$post->title}}"  class="margin" height="150" width="300">
                    </td>
                    <td>
                        <span title="{{$post->title}}">
                            {{ str_limit($post->title,10) }}
                        </span>
                    </td>
                    <td>j</td>

                    <td>{{$post->view_count}}</td>
                    <td>
                        @if($post->is_approved == true)
                            <span class="badge bg-success">Approved</span>
                        @else
                            <span class="badge bg-warning">Pending</span>
                        @endif
                    </td>
                    <td>
                        @if($post->status == true)
                            <span class="badge bg-success">Published</span>
                        @else
                            <span class="badge bg-warning">Pending</span>
                        @endif
                    </td>
                    <td>
                        <span class="badge">
                            <i class="material-icons small left">comment</i>
                            {{ $post->comments_count }}
                        </span>
                    </td>
                    <td class="text-center">

                    </td>
                </tr>
                @endforeach
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
  @include('modals.addevent')

@endsection

@section('javascripts')

<script>
    function deletePost(id){

        event.preventDefault();

if (confirm("Are you sure?")) {

    $.ajax({
        url: 'delete/events/' + id,
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
