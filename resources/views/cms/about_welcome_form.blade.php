@extends('layouts.admin')
@section('title')
Connection Group
@endsection
@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Create About welcome
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
                <form action="{{ route('cms.aboutWelcome.submit') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="email">Heading:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="heading" placeholder="Enter Lesson title">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="email">Text:</label>
                      <div class="col-sm-10">
                        <textarea class="form-control" name="text" placeholder="Enter Details"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="email">Button Text:</label>
                      <div class="col-sm-10">
                        <textarea class="form-control" name="btn_text" placeholder="Enter Details"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="email">Button Text 2:</label>
                      <div class="col-sm-10">
                        <textarea class="form-control" name="btn_text2" placeholder="Enter Details"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="email">Sunday Time:</label>
                      <div class="col-sm-10">
                        <textarea class="form-control" name="sunday_time" placeholder="Enter Details"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="email">Midweek Time:</label>
                      <div class="col-sm-10">
                        <textarea class="form-control" name="midweek_time" placeholder="Enter Details"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="email">Service Heading:</label>
                      <div class="col-sm-10">
                        <textarea class="form-control" name="service_heading" placeholder="Enter Details"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="pwd">Upload:</label>
                      <div class="col-sm-10">
                        <input type="file" class="form-control" name="image" placeholder="Select a file">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="answer">Type:</label>
                      <div class="col-sm-10">
                        <select name="type" class="form-control" value="{{ old('type') }}">
                          <option selected disabled>Select an option</option>
                          <option value="learn_more">Learn More</option>
                          <option value="welcome ">Welcome</option>
                        
                        </select>
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