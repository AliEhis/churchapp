<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<!-- Mirrored from newlife-church-html.axiomthemes.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Jul 2020 19:48:23 GMT -->
<head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="format-detection" content="telephone=no">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <title>@yield('title') | {{$site->site_name}} </title>
        @include('layouts.css')

        <link href="{{asset('img/new23.png')}}" rel="shortcut icon" type="image/png">
    </head>

    <body class="home page body_style_wide body_filled article_style_stretch scheme_original top_panel_show top_panel_above sidebar_hide">
        <a id="toc_home" class="sc_anchor" title="Home" data-description="<i>Return to Home</i> - <br>navigate to home page of the site" data-icon="icon-home" data-url="index.html" data-separator="yes"></a>
        <a id="toc_top" class="sc_anchor" title="To Top" data-description="<i>Back to top</i> - <br>scroll to top of the page" data-icon="icon-double-up" data-url="" data-separator="yes"></a>
        <!-- Body wrap -->
        <div class="body_wrap">
            <!-- Page wrap -->
            <div class="page_wrap">
                <div class="top_panel_fixed_wrap"></div>
                @include('layouts.main-nav')
                <!-- Revolution Slider Section -->
                @if(Request::is('/'))
                @include('layouts.slider')
                @endif
                <!-- /Revolution Slider Section -->
                <!-- Page Content Wrap -->
                @yield('content')
                <!-- Footer -->
                @include('layouts.footer')
                <!-- /Copyright -->
            </div>
            <!-- /Page wrap -->
        </div>
        <!-- /Body wrap -->

        <a href="#" class="scroll_to_top icon-up" title="Scroll to top"></a>


        @include('layouts.js')
        @yield('javascripts')

    </body>
</html>

