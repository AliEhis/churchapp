<!DOCTYPE html>
<html lang="en">
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset($site->logo) }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{$site->site_name}} | Admin Login </title>

	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="../../cms/assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="../../cms/assets/vendor_components/font-awesome/css/font-awesome.min.css">

	<!-- Ionicons -->
	<link rel="stylesheet" href="../../cms/assets/vendor_components/Ionicons/css/ionicons.min.css">

	<!-- Theme style -->
	<link rel="stylesheet" href="../../cms/css/master_style.css">

	<!-- Cross Admin skins -->
	<link rel="stylesheet" href="../../cms/css/skins/_all-skins.css">

	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <b>Admin</b>Portal</a><br>
    <a href="{{ route('admin.login') }}">
    <img src="{{ asset($site->logo) }}" alt="Logo" height="70" width="230">
    </a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Welcome! Please Login</p>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form action="{{ route('admin.login.submit') }}" method="post" class="form-element">
        @csrf
        <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" name="email">
        <span class="ion ion-email form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password">
        <span class="ion ion-locked form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-6">

        </div>
        <div class="col-xs-12 text-center">
          <button type="submit" class="btn btn-info btn-block btn-flat margin-top-10">SIGN IN</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->


	<!-- jQuery 3 -->
	<script src="../../cms/assets/vendor_components/jquery/dist/jquery.min.js"></script>

	<!-- Bootstrap 3.3.7 -->
	<script src="../../cms/assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>

</body>
</html>
