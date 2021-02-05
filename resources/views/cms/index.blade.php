@extends('layouts.admin')
@section('title')
    Home
@endsection
@section('content')

<section class="content">
    <div class="row">
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon push-bottom bg-blue"><i class="fa fa-handshake-o"></i></span>
          <a href="{{route('cms.churchprojects')}}">
          <div class="info-box-content">
            <span class="info-box-text">Church Projects</span>
            <span class="info-box-number">{{$volunteers}}</span>

            <div class="progress">
              <div class="progress-bar progress-bar-blue" style="width: {{$volunteers}}%"></div>
            </div>

          </div>
        </a>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon push-bottom bg-blue"><i class="fa fa-feed"></i></span>
          <a href="{{route('cms.prayerrequests')}}">
          <div class="info-box-content">
            <span class="info-box-text" title="Prayer Requests">Prayer Requests</span>
            <span class="info-box-number">{{$prayerrequest}}</span>

            <div class="progress">
              <div class="progress-bar progress-bar-blue" style="width: {{$prayerrequest}}%"></div>
            </div>
          </div>
          <a href="{{route('cms.churchprojects')}}">
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon push-bottom bg-blue"><i class="fa fa-clock-o"></i></span>
                <a href="{{route('cms.appointments')}}">
                <div class="info-box-content">
                <span class="info-box-text" title="Appointments">Appointments</span>
                <span class="info-box-number">{{$prayerlist}}</span>

                <div class="progress">
                    <div class="progress-bar progress-bar-blue" style="width: {{$prayerlist}}%"></div>
                </div>
                </div>
                </a>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            </div>
            <!-- /.col -->

                    <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon push-bottom bg-blue"><i class="fa fa-balance-scale"></i></span>
                <a href="{{route('cms.users.index')}}">
                <div class="info-box-content">
                <span class="info-box-text" title="Total Users">Total Users</span>
                <span class="info-box-number">{{$users}}</span>

                <div class="progress">
                    <div class="progress-bar progress-bar-blue" style="width: {{$users}}%"></div>
                </div>
                </div>
                </a>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            </div>
            <!-- /.col -->

      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon push-bottom bg-blue"><i class="fa fa-users"></i></span>
          <a href="{{route('cms.newmembers')}}">
          <div class="info-box-content">
            <span class="info-box-text">New Members</span>
            <span class="info-box-number">{{$messages}}</span>

            <div class="progress">
              <div class="progress-bar progress-bar-blue" style="width: {{$messages}}%"></div>
            </div>
          </div>
          </a>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon push-bottom bg-blue"><i class="fa fa-tags"></i></span>
          <a href="{{route('cms.sermons')}}">
          <div class="info-box-content">
            <span class="info-box-text">Sermons</span>
            <span class="info-box-number">{{$postcounts}}</span>

            <div class="progress">
              <div class="progress-bar progress-bar-blue" style="width: {{$postcounts}}%"></div>
            </div>
          </div>
          </a>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->

      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon push-bottom bg-blue"><i class="fa fa-cubes"></i></span>
          <a href="{{route('cms.events')}}">
          <div class="info-box-content">
            <span class="info-box-text">Events</span>
            <span class="info-box-number">{{$events}}</span>

            <div class="progress">
              <div class="progress-bar progress-bar-blue" style="width: {{$events}}%"></div>
            </div>
          </div>
          </a>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon push-bottom bg-blue"><i class="fa fa-users"></i></span>
          <a href="{{route('cms.testimonies')}}">
          <div class="info-box-content">
            <span class="info-box-text" title="Testimonies">Testimonies</span>
            <span class="info-box-number">{{$happenings}}</span>

            <div class="progress">
              <div class="progress-bar progress-bar-blue" style="width: {{$happenings}}%"></div>
            </div>
          </div>
          </a>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
    </div>
    <div class="row">
        <!-- Left col -->
        <section class="col-lg-6 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->


          <!-- Chat box -->
          <div class="box">
            <div class="box-header">
              <i class="fa fa-comments"></i>

              <h3 class="box-title">Showing 10 Recent Testimonies</h3>

            </div>
            <table id="example" class="table table-bordered table-hover display nowrap margin-top-10">
                <thead>
                    <tr>
                      <th class="wd-10p">#</th>
                      <th class="wd-15p">Name</th>
                      <th class="wd-15p">Category</th>
                      <th scope="wd-15p">Description</th>
                      <th scope="wd-15p">Status</th>
                      <th class="wd-15p">Date</th>
                      <th class="wd-15p">Action</th>
                    </tr>
                </thead>
                <tbody>
                  @if(count($noticeboardslist) < 1)
                  <tr>
                      <th>No record currently available</th>
                  </tr>
                  @else
                  @foreach($noticeboardslist as $key=>$state)
                  <tr>
                      <td>{{++$key}}</td>
                      <td>{{$state->name}}</td>
                      <td>{{$state->category}}</td>
                      <td>{!! str_limit($state->body,150) !!}</td>
                      <td>
                          @if($state->status == 1)
                              <span class="badge bg-danger">Hidden</span>
                          @else
                          <span class="badge bg-success"> Visible</span>
                          @endif
                      </td>
                      <td>{{ date('M j, Y', strtotime($state->updated_at)) }}</td>
                      <td>
                      <a  onclick="deleteContact({{ $state->id }})">
                        <a href="#" class="btn btn-danger btn-icon mg-r-5 mg-b-10" onclick="deleteContact({{ $state->id }})"><i class="icon ion-ios-trash-outline tx-24"></i> Trash</a></a>
                      </a>
                      </td>
                      </tr>
                    @endforeach
                    @endif
                  </tbody>

            </table>
          </div>
        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-6 connectedSortable">

          <!-- TO DO List -->
          <div class="box">
            <div class="box-header">
              <i class="fa fa-file"></i>

              <h3 class="box-title">Showing 10 Recent Prayer Requests</h3>

            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example" class="table table-bordered table-hover display nowrap margin-top-10">
                    <thead>
                        <tr>
                          <th class="wd-10p">#</th>
                          <th class="wd-15p">Name</th>
                          <th class="wd-15p">Email</th>
                          <th class="wd-15p">Phone</th>
                          <th scope="wd-15p">Body</th>
                          <th scope="wd-15p">Date</th>
                          <th class="wd-15p">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      @if(count($todolists) < 1)
                      <tr>
                          <th>No record currently available</th>
                      </tr>
                      @else
                      @foreach($todolists as $key=>$state)
                      <td>{{++$key}}</td>
                          <td>{{$state->name}}</td>
                          <td>{{$state->email}}</td>
                          <td>{{$state->phone}}</td>
                          <td>{!! $state->body !!}</td>
                          <td>{{ date('M j, Y h:ia', strtotime($state->created_at)) }}</td>
                          <td>
                          <a  onclick="deleteContact({{ $state->id }})">
                            <a href="#" class="btn btn-danger btn-icon mg-r-5 mg-b-10" onclick="deleteContact({{ $state->id }})"><i class="icon ion-ios-trash-outline tx-24"></i> Trash</a></a>
                            </a>
                            <a href="mailto:{{$state->email}}" class="btn btn-primary btn-icon mg-r-5 mg-b-10"><i class="fa fa-envelope tx-24"></i> Mail</a></a>
                          </td>
                          </tr>
                        @endforeach
                        @endif
                      </tbody>

                </table>
            </div>
            <!-- /.box-body -->

          </div>
          <!-- /.box -->

        </section>
        <section class="col-lg-12 connectedSortable">
            <div class="box box-solid bg-blue-gradient">
                <div class="box-header">
                  <i class="fa fa-calendar"></i>

                  <h3 class="box-title">Calendar</h3>
                  <!-- tools box -->
                  <div class="pull-right box-tools">
                    <!-- button with a dropdown -->
                    <div class="btn-group">
                      <button type="button" class="btn btn-blue btn-sm dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bars"></i></button>
                      <ul class="dropdown-menu pull-right" role="menu">
                        <li><a href="#">Add new event</a></li>
                        <li><a href="#">Clear events</a></li>
                        <li class="divider"></li>
                        <li><a href="#">View calendar</a></li>
                      </ul>
                    </div>
                    <button type="button" class="btn btn-blue btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-blue btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
                  </div>
                  <!-- /. tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                  <!--The calendar -->
                  <div id="calendar" style="width: 100%"></div>
                </div>
                <!-- /.box-body -->

              </div>
        </section>
        <!-- right col -->
      </div>




    <!-- /.row (main row) -->

  </section>


@endsection


