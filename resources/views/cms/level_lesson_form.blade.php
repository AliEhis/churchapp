@extends('layouts.admin')
@section('title')
Lesson
@endsection
@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Create Lesson
                    </h3>
                    <br>
                    <br><br>
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
                <form action="{{ route('cms.levelLessonCreate.submit') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="email">Title:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="title" placeholder="Enter Lesson title">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="email">Bible:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="bible" placeholder="Enter Lesson pastor">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="pwd">Upload:</label>
                      <div class="col-sm-10">
                        <input type="file" class="form-control" name="video" placeholder="Select a file">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Create</button>
                      </div>
                    </div>
                    <input type="hidden" name="level_id" value="{{$classId}}">
                    @if(session('success'))
                      <div class="alert alert-success">
                        {!! session('success') !!}
                      </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
  </div>
</section>
@endsection