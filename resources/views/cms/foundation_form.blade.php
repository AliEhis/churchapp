@extends('layouts.admin')
@section('title')
Clients
@endsection
@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Create Foundation
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
                <form action="{{ route('cms.foundationCreate.submit') }}" method="post" class="form-horizontal">
                    @csrf
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="email">Name:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" placeholder="Enter Foundation name" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="pwd">Description:</label>
                      <div class="col-sm-10">
                        <textarea name="description" class="form-control" cols="30" rows="5" placeholder="Brief description" required></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="pwd">Duration:</label>
                      <div class="col-sm-5">
                        <input type="number" class="form-control" placeholder="Duration" min="1" name="period" required>
                      </div>
                      <div class="col-sm-5">
                        <select name="type" class="form-control" required>
                          <option selected disabled>Select an option</option>
                          <option value="day">day(s)</option>
                          <option value="week">week(s)</option>
                          <option value="month">month(s)</option>
                          <option value="year">year(s)</option>
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