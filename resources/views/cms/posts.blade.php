@extends('layouts.admin')
@section('title')
    Posts
@endsection
@section('content')


<section class="content">
    <div class="row">
      <div class="col-xs-12">

        <div class="box">
            <button type="button" class="btn btn-primary mg-r-5"  data-toggle="modal" data-target="#modaldemo1"><i class="menu-item-icon icon ion-ios-plus-outline tx-20"></i> Create Post </button>
            <button type="submit" class="btn btn-primary mg-r-5" data-toggle="modal" data-target="#modaldemo4"><i class="menu-item-icon icon ion-ios-plus-outline tx-20"></i> Add Tag</button>
            <button type="submit" class="btn btn-primary mg-r-5" data-toggle="modal" data-target="#modaldemo5"><i class="menu-item-icon icon ion-ios-plus-outline tx-20"></i> View Tags</button>
            <button type="submit" class="btn btn-primary mg-r-5" data-toggle="modal" data-target="#modaldemo2"><i class="menu-item-icon icon ion-ios-plus-outline tx-20"></i> Add Category</button>
            <button type="submit" class="btn btn-primary mg-r-5" data-toggle="modal" data-target="#modaldemo3"><i class="menu-item-icon icon ion-ios-plus-outline tx-20"></i> View categories</button>

          <div class="box-header">
            <h3 class="box-title">Posts List</h3>
            <h6 class="box-subtitle">Sorting is from the most recent.</h6>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
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
                @foreach( $posts as $key => $post )
                <tr>
                    <td>{{$key+1}}</td>
                    <td>
                        @if(Storage::disk('public')->exists('posts/'.$post->image))
                            <img src="{{Storage::url('posts/'.$post->image)}}" alt="{{$post->title}}"  class="margin" height="150" width="200">
                        @endif
                    </td>
                    <td>
                        <span title="{{$post->title}}">
                            {{ str_limit($post->title,20) }}
                        </span>
                    </td>
                    <td>{{$post->user->name}}</td>
                    <td>
                        @foreach($post->categories as $key=>$category)
                            @if($key!=0)
                                <span>,</span>
                            @endif
                            {{$category->name}}
                        @endforeach
                    </td>
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
                        <a onclick="fetchPost({{ $post->id }})">
                            <button type="submit" class="btn btn-primary pd-x-20" data-toggle="modal" data-target="#editnewsModal">Edit</button>
                          </a>
                          <button type="button" onclick="deletePost({{ $post->id }})" class="btn btn-danger pd-x-20" data-dismiss="modal">Delete</button>
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
  @include('modals.addpost')
  @include('modals.addcategory')
  @include('modals.addtag')
  @include('modals.addcategory')
  @include('modals.edit_news')
  @include('modals.viewcategory')
  @include('modals.viewtag')


@endsection

@section('javascripts')
<script>

    function fetchPost(id) {

    event.preventDefault();

    $.ajax({
    url: 'churchstories/' + id,
    method: 'get',
    success: function(result){
        console.log(result);
        $('#titleEdit').val(result.title);
        $('#authorEdit').val(result.author);
        $('#bodyEdit').val(result.body);
        var url = 'churchstories/' + id;
        $('form#churchstories').attr('action', url);
        $('#editnewsModal').modal('show');
    }
    });

    }
    </script>


        <script>
            function deletePost(id) {

        event.preventDefault();

        if (confirm("Are you sure?")) {

            $.ajax({
                url: 'delete/posts/' + id,
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
