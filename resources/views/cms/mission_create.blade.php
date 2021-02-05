@extends('layouts.admin')
@section('title')
Home Page Pastor Intro
@endsection
@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Create Mission
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
                <form action="{{ route('cms.create_mission.submit') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="email">Title:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="title" placeholder="Enter mission title" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="email">Content:</label>
                      <div class="col-sm-10">
                        <textarea class="form-control" name="content" placeholder="Mission content" required></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="pwd">Upload image 1:</label>
                      <div class="col-sm-10">
                        <input type="file" class="form-control" name="image1" placeholder="Select a file">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="pwd">Upload image 2:</label>
                      <div class="col-sm-10">
                        <input type="file" class="form-control" name="image2" placeholder="Select a file">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="pwd">Upload image 3:</label>
                      <div class="col-sm-10">
                        <input type="file" class="form-control" name="image3" placeholder="Select a file">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="pwd">Upload image 4:</label>
                      <div class="col-sm-10">
                        <input type="file" class="form-control" name="image4" placeholder="Select a file">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Create</button>
                      </div>
                    </div>
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