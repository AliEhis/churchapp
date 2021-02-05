@extends('layouts.admin')
@section('title')
About
@endsection

@section('content')

<section class="content">
    <div class="row">
      <div class="col-md-12">

        <div class="box">
          <div class="box-header">
            <h3 class="box-title">About Us Page
            </h3>
            <!-- tools box -->
            <div class="pull-right box-tools">
              <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip"
                      title="Collapse">
                <i class="fa fa-minus"></i></button>
              <button type="button" class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip"
                      title="Remove">
                <i class="fa fa-times"></i></button>
            </div>
            <!-- /. tools -->
          </div>
          <!-- /.box-header -->
          <div class="box-body pad">
          <form id="aboutForm" action="{{ route('cms.update', ['page' => 'about', 'id' => 1]) }}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="PUT">
          <textarea id="summernote" name="aboutcontent" class="form-control">{!! $general->about_content !!}</textarea>
          <br>
          <div class="form-group">
            <label for="image">Side image</label>
            <input type="file" name="aboutimage" class="form-control">
        </div>
          <div class="form-layout-footer">
            <button type="submit" class="btn btn-primary mg-r-5">Update</button>
        </div>

        </form>
        </div><!-- card -->

                  <!-- /.box-header -->
                  <div class="box-body pad">
                    <form id="aboutForm" action="{{route('cms.aboutmore.update')}}" method="POST" enctype="multipart/form-data">
                  {{csrf_field()}}
                  <input type="hidden" name="_method" value="PUT">
                    <textarea  name="who_we_are" value="{{$general->who_we_are}}" class="form-control">{!! $general->who_we_are !!}</textarea>
                    <br>
                    <textarea  name="what_we_do" value="{{$general->what_we_do}}" class="form-control">{!! $general->what_we_do !!}</textarea>
                    <br>

                    <div class="form-layout-footer">
                      <button type="submit" class="btn btn-primary mg-r-5">Update</button>
                  </div>

                  </form>
                  </div><!-- card -->
        <div class="sl-pagebody">
            <div class="card pd-20 pd-sm-40 mg-t-25">
              <h6 class="card-body-title">Our Team Members</h6>
              <div class="form-layout-footer">
                <button type="submit" class="btn btn-primary mg-r-5" data-toggle="modal" data-target="#modaldemo1"><i class="menu-item-icon icon ion-ios-plus-outline tx-20"></i> Add Member</button>
            </div>
            <div class="row">
              @foreach($teams as $team)
                <div class="col-md">
                <div class="card pd-20 pd-sm-40">
                  <div class="card wd-xs-200">
                    <div class="card-body bd bd-b-0">
                      <h6 class="mg-b-3"><a href="#" class="tx-dark">Name: {{$team->name}}</a></h6>
                      <span class="tx-12">Title: {{$team->job_title}}</span>
                    </div><!-- card-body -->
                    <img class="card-img-bottom img-fluid" src="{{URL::to($team->image)}}" alt="Image">
                  </div><!-- card -->
                  <div class="card-footer bg-gray-400 tx-right">
                  <a href="#" class="btn btn-primary btn-icon mg-r-5 mg-b-10" data-toggle="modal" data-target="#{{ $team->id }}" onclick="fetchPost({{ $team->id }})"><div><i class="fa fa-pencil"></i></div></a>
                    <a  onclick="deleteContact({{ $team->id }})">
                    <a href="#" class="btn btn-danger btn-icon mg-r-5 mg-b-10" onclick="deleteTeam({{ $team->id }})"><i class="icon ion-ios-trash-outline tx-24"></i> Trash</a></a>
                    </a>
                    </div><!-- card-footer -->
                </div><!-- card -->
                </div><!-- col -->
               @endforeach

              </div><!-- row -->
            </div><!-- card -->

            </div>


</div>
</div>
<!-- /.box -->

</div>
<!-- /.col-->
</div>
<!-- ./row -->
</section>
@include('modals.addmember')
@include('modals.edit_member')

<script>

    function fetchPost(id) {

        event.preventDefault();

        $.ajax({
        url: 'team/' + id,
        method: 'get',
        success: function(result){
            console.log(result);
            $('#nameEdit').val(result.name);
            $('#job_titleEdit').val(result.job_title);
            $('#facebookEdit').val(result.facebook);
            $('#twitterEdit').val(result.twitter);
            $('#linkedinEdit').val(result.linkedin);
            $('#instagramEdit').val(result.instagram);
            var url = 'team/' + id;
            $('form#team').attr('action', url);
            $('#editteamModal').modal('show');
        }
        });

        }
        </script>
<script>

    function deleteTeam(id) {

        event.preventDefault();

        if (confirm("Are you sure?")) {

            $.ajax({
                url: 'delete/teams/' + id,
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
