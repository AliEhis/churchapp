@extends('layouts.admin')
@section('title')
Users
@endsection
@section('content')
<section class="content">
    <div class="row">
      <div class="col-md-12">

        <div class="box">
          <div class="box-header">
            <h3 class="box-title">System Administrators  <span class="badge badge-info position-right">Total Admins: {{count($admins)}}</span></h3>
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
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <div class="elements">
                            <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#createAdminModal">Create new account</button>
                        </div>
                    </div>
                    <div class="card-block">
                        <div class="row">
                            <div class="col-md-12">
                                @if(count($roles) > 0)
                                    <ul class="nav nav-tabs nav-tabs-highlight" role="tablist">
                                        @php $indexer = 0;@endphp
                                        @foreach($roles as $role)
                                            @php $indexer+=1; @endphp
                                            @if($indexer == 1)
                                                <li class="nav-item">
                                                    <a href="#roles{{$role->id}}Tab" class="nav-link active" data-toggle="tab" role="tab">
                                                        <span class="badge badge-pill badge-danger position-left">{{count($role->admins)}}</span> {{$role->title}}
                                                    </a>
                                                </li>
                                            @else
                                                <li class="nav-item">
                                                    <a href="#roles{{$role->id}}Tab" class="nav-link" data-toggle="tab" role="tab">
                                                        <span class="badge badge-pill badge-danger position-left">{{count($role->admins)}}</span> {{$role->title}}
                                                    </a>
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                    <div class="tab-content">
                                        @php $indexer2 = 0; @endphp
                                        @foreach($roles as $role)
                                            @php $indexer2 += 1; @endphp
                                            @if($indexer2 == 1)
                                            <div class="tab-pane active" id="roles{{$role->id}}Tab" role="tabpanel" style="padding:20px;">
                                                <div class="table-responsive">
                                                    <table class="table table-hover table-stripped table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Name</th>
                                                                <th>E-Mail</th>
                                                                <th>Status</th>
                                                                <th>Action</th>
                                                                @if(
                                                                    \Auth::user()->role->permission->delete_account == "yes")
                                                                <th>Action</th>
                                                                @endif
                                                            </tr>
                                                            <tbody>
                                                                @php $counter = 0; @endphp
                                                                @forelse($role->admins as $admin)
                                                                    <tr>
                                                                        <th>{{$counter+=1}}</th>
                                                                        <th><a href="{{route('cms.users.edit', ['id' => $admin->id])}}">{{$admin->name}}</a></th>
                                                                        <th>{{$admin->email}}</th>
                                                                        <th>
                                                                                <button class="btn btn-success  btn-sm">Active</button>

                                                                        </th>

                                                                        <th><a href="{{route('cms.users.edit', ['id' => $admin->id])}}"><i class="fa fa-eye"></i></a></th>

                                                                        <th>
                                                                        <a href="{{ route('cms.destroy', ['page' => 'admins', 'id' => $admin->id]) }}"></a>


                                                                        </th>

                                                                    </tr>
                                                                @empty
                                                                <tr>
                                                                    <th colspan="3" class="text-center">No admins assigned to this role yet.</th>
                                                                </tr>
                                                                @endforelse
                                                            </tbody>
                                                        </thead>
                                                    </table>
                                                </div>
                                            </div>
                                            @else
                                            <div class="tab-pane" id="roles{{$role->id}}Tab" role="tabpanel" style="padding:20px;">
                                                <div class="table-responsive">
                                                    <table class="table table-hover table-stripped table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Name</th>
                                                                <th>E-Mail</th>
                                                                <th>Status</th>
                                                                <th>Action</th>

                                                            <tbody>
                                                                @php $counter = 0; @endphp
                                                                @forelse($role->admins as $admin)
                                                                    <tr>
                                                                        <th>{{$counter+=1}}</th>
                                                                        <th><a href="{{route('cms.users.edit', ['id' => $admin->id])}}">{{$admin->name}}</a></th>
                                                                        <th>{{$admin->email}}</th>
                                                                        <th>
                                                                                <button class="btn btn-success  btn-sm">Active</button>

                                                                        </th>
                                                                        <th><a href="{{route('cms.users.edit', ['id' => $admin->id])}}"><i class="fa fa-eye"></i></a>
                                                                        <a style="color: red" href="{{route('cms.users.delete', ['id' => $admin->id])}}"><i class="fa fa-trash"></i>
                                                                    </th>

                                                                    </tr>
                                                                @empty
                                                                <tr>
                                                                    <th colspan="3" class="text-center">No admins assigned to this role yet.</th>
                                                                </tr>
                                                                @endforelse
                                                            </tbody>
                                                        </thead>
                                                    </table>
                                                </div>
                                            </div>
                                            @endif
                                        @endforeach
                                    </div>
                                @else
                                    <h3 class="text-center">
                                        There are no predefined roles on your system.
                                    </h3>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('modals.create_new_admin')
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- /.box -->

    </div>
    <!-- /.col-->
    </div>
    <!-- ./row -->
    </section>
    <!-- /Custom header -->
@endsection
