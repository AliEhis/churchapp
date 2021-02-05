<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <!-- End Google Tag Manager -->
    <title>Login | {{$site->site_name}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <!-- External CSS libraries -->
    @include('layouts.css')
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/fonts/font-awesome/css/font-awesome.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/fonts/flaticon/font/flaticon.css')}}">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="{{asset('img/new23.png')}}" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPoppins:400,500,700,800,900%7CRoboto:100,300,400,400i,500,700">

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="{{asset('assets/css/skins/default.css')}}">

</head>
<body id="top">

    @include('layouts.main-nav')

<!-- Login 14 start -->
<div class="login-14">
    <div class="container">
        <div class="row login-box">
            <div class="col-lg-5 col-md-12 bg-img none-992 col-pad-0 align-self-center">
                <div class="info">

                </div>
            </div>
            <div class="col-lg-7 col-md-12 bg-color-16 align-self-center">
                <div class="form-section">
                    <h6>SIGN IN USING YOUR EMAIL ADDRESS</h6>
                    <br>
                    <div class="login-inner-form">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group form-box">
                                <label style="float: left"><font color="black"> Email Address </font></label>
                                <input type="email" name="email" class="input-text" placeholder="Email Address">
                            </div>
                            <div class="form-group form-box">
                                <label style="float: left"><font color="black"> Password  </font></label>
                                <input type="password" name="password" class="input-text" placeholder="Password">
                            </div>
                            <div class="checkbox clearfix" style="float: left">
                                <label class="form-check-label">
                                    <a href="{{ route('password.request') }}">Forgot Password?</a>
                                </label>
                            </div>
                            <div class="form-group mb-0">
                                <a href="#" class="btn-block sc_button sc_button_square sc_button_style_filled sc_button_color_style_3 sc_button_size_large width_100">
                                   LOGIN
                                </a>
                                <br>
                                -OR-
                                <br>
                            </div>
                            <div class="sc_section margin_bottom_large font_weight_700">
                                <div class="sc_section_inner">
                                    <p class="accent1 margin_bottom_small" style="color: black">SIGN IN WITH</p>
                                    <div class="sc_socials sc_socials_type_icons sc_socials_shape_round sc_socials_size_tinys">
                                        <div class="sc_socials_item">
                                            <a href="{{ url('/login/twitter') }}" target="_blank" class="social_iconsnew social_twitter">
                                                <span class="icon-twitter"></span>
                                            </a>
                                        </div>
                                        <div class="sc_socials_item">
                                            <a href="{{ url('/login/facebook') }}"  class="social_iconsnew social_facebook">
                                                <span class="icon-facebook"></span>
                                            </a>
                                        </div>
                                        <div class="sc_socials_item">
                                            <a href="{{ url('/login/google') }}"  class="social_iconsnew social_google-plus">
                                                <span class="icon-google-plus"></span>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <p class="accent1 margin_bottom_small" style="color: black"><strong> DON'T HAVE AN ACCOUNT?</strong></p>

                        </form>
                    </div>
                    <a href="{{route('register')}}" class="sc_button sc_button_square sc_button_style_border sc_button_color_style_2 sc_button_size_large">CREATE ACCOUNT</a>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.footer')

<!-- Login 14 end -->

<!-- External JS libraries -->
<script src="assets/js/jquery-2.2.0.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<!-- Custom JS Script -->
</body>

<!-- Mirrored from theme-vessel-templates.theme-vessel.ey.r.appspot.com/logdy/main/register-14.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Aug 2020 13:49:31 GMT -->
</html>
