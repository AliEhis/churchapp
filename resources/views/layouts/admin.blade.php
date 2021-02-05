<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    {{-- <link rel="icon" href="img/cropped-favi-400x400.png"> --}}
    <link rel="icon" href="{{asset('img/new23.png')}}" type="image/x-icon">


    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') | {{$site->site_name}} </title>

    @include('layouts.css_cms')


  </head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{asset('img/download.png')}}" class="user-image" alt="User Image">
            </a>
            <ul class="dropdown-menu scale-up">
              <!-- User image -->
              <li class="user-header">
                <img src="{{asset('img/download.png')}}" class="img-responsive" alt="User Image">

                <p>
                    {{ucfirst(Auth::User()->name)}}
                  <small>{{ucfirst(Auth::User()->email)}}</small>
                </p>
              </li>

              <li class="user-footer">
                <div class="pull-left">
                  <a href="{{ route('cms.settings') }}" class="btn btn-default btn-flat">Settings</a>
                </div>
                <div class="pull-right">
                  <a href="{{ route('admin.logout') }}" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Messages-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope"></i>
              {{-- <span class="label label-danger">{{$messages}}</span> --}}
            </a>
            <ul class="dropdown-menu scale-up">
                {{-- @if($messages == 1)
              <li class="header">You have {{$messages}} message</li>
              <li>
                @else
                <li class="header">You have {{$messages}} messages</li>
                <li>
                @endif --}}
                <!-- inner menu: contains the actual data -->
                {{-- <ul class="menu inner-content-div">
                    @forelse($contacts as $contact)
                  <li> --}}
                    <!-- start message -->
                    {{-- <a href="#">
                      <div class="pull-left">
                        <img src="{{asset('img/download.png')}}" class="img-circle" alt="User Image">
                      </div>
                      <div class="mail-contnet">
                         <h4>
                            {{$contact->name}}
                          <small><i class="fa fa-clock-o"></i> {{$contact->created_at->diffForHumans()}}</small>
                         </h4>
                         <span>{!! substr($contact->message, 0, 30) . '...' !!}</span>
                      </div>
                    </a>
                  </li>
                  @empty
                  <li class="footer"> No contact request yet</li>
                  @endforelse
                </ul> --}}
              </li>
              <li class="footer"><a href="{{ route('cms.contact') }}">See all Messages</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar-->
    @include('layouts.sidebar')
    <!-- /.sidebar -->

  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">


    <!-- Main content -->
    @yield('content')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @include('layouts.cms_footer')

</div>
<!-- ./wrapper -->



@include('layouts.js_cms')
<script>
    @if(Session::has('success'))
    new Noty({
        type: 'success',
        layout: 'topRight',
        text: '{{Session::get('success')}}'
    }).show();
    @endif

    @if(Session::has('fail'))
    new Noty({
        type: 'error',
        layout: 'topRight',
        text: '{{Session::get('fail')}}'
    }).show();
    @endif

    @if(Session::has('error'))
    new Noty({
        type: 'error',
        layout: 'topRight',
        text: '{{Session::get('error')}}'
    }).show();
    @endif

</script>
<script>
    $(function(){
      'use strict';

      // Inline editor
      var editor = new MediumEditor('.editable');

      // Summernote editor
      $('#summernote').summernote({
        height: 150,
        tooltip: false
      })
    });
  </script>
      <script>

$(window).on('load',function(){

  $('#summernote').summernote({
    height: 150,
    tooltip: false
  });

});

</script>
@yield('javascripts')
</body>
</html>



</body>
</html>
