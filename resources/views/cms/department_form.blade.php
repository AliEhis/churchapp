
  

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
            <h3 class="box-title">Create Department
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
          <form action="{{ route('cms.departmentCreate.submit') }}" method="post" class="form-horizontal">
            @csrf
            <div class="form-group">
              <label class="control-label col-sm-2" for="email">Department Title:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="department" name="title" placeholder="Enter Department Name">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="pwd">Department Head:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="head" name="department_head" placeholder="Enter Department Head">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="pwd">Description:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="head" name="description" placeholder="Enter Department Head">
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
<!-- /.box -->

</div>
<!-- /.col-->
</div>
<!-- ./row -->
</section>


@endsection
