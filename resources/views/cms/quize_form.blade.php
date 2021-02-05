@extends('layouts.admin')
@section('title')
Quize
@endsection
@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Create Quize
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
                <form action="{{ route('cms.quizeCreate.submit') }}" method="post" class="form-horizontal">
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
                      <label class="control-label col-sm-2" for="question">Question:</label>
                      <div class="col-sm-10">
                        <textarea name="question" cols="30" rows="5" class="form-control" value="{{ old('question') }}" placeholder="Enter Question" required></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="option1">Option 1:</label>
                      <div class="col-sm-10">
                        <textarea name="option1" cols="30" rows="5" class="form-control" value="{{ old('option1') }}" required></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="option1">Option 2:</label>
                      <div class="col-sm-10">
                        <textarea name="option2" cols="30" rows="5" class="form-control" value="{{ old('option2') }}" required></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="option3">Option 3:</label>
                      <div class="col-sm-10">
                        <textarea name="option3" cols="30" rows="5" class="form-control" value="{{ old('option3') }}" required></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="option4">Option 4:</label>
                      <div class="col-sm-10">
                        <textarea name="option4" cols="30" rows="5" class="form-control" value="{{ old('option4') }}" required></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="answer">Answer:</label>
                      <div class="col-sm-10">
                        <select name="answer" class="form-control" value="{{ old('answer') }}">
                          <option selected disabled>Select an option</option>
                          <option value="option1">Option 1</option>
                          <option value="option2">Option 2</option>
                          <option value="option3">Option 3</option>
                          <option value="option4">Option 4</option>
                        </select>
                      </div>
                    </div>
                    {{-- <input type="hidden" name="classId" class="form-control" value="{{ $classId }}"> --}}
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