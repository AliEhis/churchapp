@extends('layouts.admin')
@section('title')
Prayer Tab
@endsection
@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Create belief
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
                <form action="{{ route('cms.belief.submit') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    @if(session('fail'))
                      <div class="col-md-12">
                        <div class="alert alert-warning">
                          {!! session('fail') !!}
                        </div>
                      </div>
                    @endif
                    @if(session('success'))
                      <div class="alert alert-success">
                        {!! session('success') !!}
                      </div>
                    @endif
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="email">Top Title:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="titletop" placeholder="Enter Lesson title">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="email">Top Portion:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="portiontop" placeholder="Enter Lesson pastor">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="email">Top Text:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="texttop" placeholder="Enter Lesson pastor">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="pwd">Photo Top:</label>
                      <div class="col-sm-10">
                        <input type="file" class="form-control" name="phototop" placeholder="Select a file">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="email">Bottom Title:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="titlebottom" placeholder="Enter Lesson title">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="email">Bottom Portion:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="portionbottom" placeholder="Enter Lesson pastor">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="email">Bottom Text:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="textbottom" placeholder="Enter Lesson pastor">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="pwd">Bottom Photo:</label>
                      <div class="col-sm-10">
                        <input type="file" class="form-control" name="photobottom" placeholder="Select a file">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="answer">Type:</label>
                      <div class="col-sm-10">
                        <select name="type" class="form-control" value="{{ old('type') }}">
                          <option selected disabled>Select an option</option>
                          <option value="aboutBelief ">About Belief</option>
                          <option value="newLifeBelief ">New Life Belief </option>
                          <option value="contactBelief ">Contact Belief </option>
                          <option value="homecellBelief  ">Home cell Belief  </option>
                        
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Create</button>
                      </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </div>
</section>
@endsection