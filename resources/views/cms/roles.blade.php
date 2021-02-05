@extends('layouts.admin')
@section('title')
Roles
@endsection
@section('content')
<section class="content">
    <div class="row">
      <div class="col-md-12">

        <div class="box">
          <div class="box-header">
            <h3 class="box-title">System Roles
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
                    <div class="card">
                        <div class="card-header">
                            <div class="elements">
                                <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#createRoleModal">Create new role</button>
                            </div>
                        </div>
                        <div class="card-block">
                            <div class="row">
                                <div class="col-md-12">
                                    <ul class="nav nav-tabs nav-tabs-highlight" role="tablist">
                                        <li class="nav-item"><a href="#rolesTab" class="nav-link active" data-toggle="tab" role="tab"><span class="badge badge-pill badge-danger position-left">{{count($roles)}}</span> Roles</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="rolesTab" role="tabpanel" style="padding:20px;">
                                            <div class="table-responsive">
                                                <table class="table table-hover table-stripped table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Title</th>
                                                            <th>Users Count</th>
                                                            <th>Action</th>
                                                        </tr>
                                                        <tbody>
                                                            @php $counter = 0; @endphp
                                                            @forelse($roles as $role)
                                                                <tr>
                                                                    <th>{{$counter+=1}}</th>
                                                                    <th>{{$role->title}}</th>
                                                                    <th>{{count($role->admins)}}</th>
                                                                    <th>
                                                                    @if($role->title != 'Super Admin')
                                                                    <a style="color: red" href="{{route('roles.delete', ['id' => $role->id])}}"><i class="fa fa-trash"></i>
                                                                    @endif
                                                                </th>
                                                                </tr>
                                                            @empty
                                                            <tr>
                                                                <th colspan="3" class="text-center">No roles defined yet.</th>
                                                            </tr>
                                                            @endforelse
                                                        </tbody>
                                                    </thead>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    <!-- /.col-->
    </div>
    <!-- ./row -->
    </section>
    <!-- /Custom header -->
@include('modals.create_new_roles')


<script>
    function deleteContact(id) {

event.preventDefault();

if (confirm("Are you sure?")) {

    $.ajax({
        url: 'delete/roles/' + id,
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

