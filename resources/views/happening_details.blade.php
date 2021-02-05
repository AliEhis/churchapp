<!DOCTYPE html>
<html lang="en-US" class="scheme_original">


<!-- Mirrored from newlife-church-html.axiomthemes.com/post-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Aug 2020 17:30:35 GMT -->
<head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="format-detection" content="telephone=no">


        <title>{{$eventdetails->title}} |  {{$site->site_name}}</title>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Caveat:400,700|Lato:300,300i,400,400i,700,700i|Raleway:300,300i,400,400i,700,700i&amp;subset=latin-ext">
        <link rel="stylesheet" href="{{asset('css/fontello/css/fontello.css')}}" type="text/css" media="all" />

        <link rel="stylesheet" href="{{asset('js/vendor/the-events-calendar/bootstrap-datepicker/css/datepicker.css')}}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{asset('js/vendor/the-events-calendar/css/tribe-events-full.min.css')}}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{asset('js/vendor/the-events-calendar/css/tribe-events-full-mobile.min.css')}}" type="text/css" media="only screen and (max-width: 768px)" />

        <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{asset('css/core.animation.min.css')}}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{asset('css/shortcodes.min.css')}}" type="text/css" media="all" />

        <link rel="stylesheet" href="{{asset('css/plugin.instagram-widget.min.css')}}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{asset('css/plugin.tribe-events.min.css')}}" type="text/css" media="all" />

        <link rel="stylesheet" href="{{asset('css/skin.min.css')}}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{asset('css/responsive.min.css')}}" type="text/css" media="all" />

        <link rel="stylesheet" href="{{asset('css/core.messages.min.css')}}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{asset('js/vendor/magnific/magnific-popup.min.css')}}" type="text/css" media="all" />

        <link href="{{asset('img/new23.png')}}" rel="shortcut icon" type="image/png">
    </head>

    <body class="single body_style_wide body_filled article_style_stretch scheme_original top_panel_show top_panel_above sidebar_show sidebar_right">
        <a id="toc_home" class="sc_anchor" title="Home" data-description="<i>Return to Home</i> - <br>navigate to home page of the site" data-icon="icon-home" data-url="index.html" data-separator="yes"></a>
        <a id="toc_top" class="sc_anchor" title="To Top" data-description="<i>Back to top</i> - <br>scroll to top of the page" data-icon="icon-double-up" data-url="" data-separator="yes"></a>
        <!-- Body wrap -->
        <div class="body_wrap">
            <!-- Page wrap -->
            <div class="page_wrap">
                <div class="top_panel_fixed_wrap"></div>
                @include('layouts.main-nav')
                <!-- Breadcrumbs -->
                <div class="top_panel_title top_panel_style_3 title_present breadcrumbs_present scheme_original">
                    <div class="top_panel_title_inner top_panel_inner_style_3 breadcrumbs_block_bg3">
                        <div class="content_wrap">
                            <h1 class="page_title">{{$eventdetails->title}}</h1>
                            <div class="breadcrumbs">
                                <a class="breadcrumbs_item home" href="{{url('/')}}">Home</a>
                                <span class="breadcrumbs_delimiter"></span>
                                <a class="breadcrumbs_item cat_post" href="#">{{$eventdetails->title}}</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Breadcrumbs -->
                <!-- Page Content Wrap -->
                <div class="page_content_wrap page_paddings_no">
                    <div class="content_wrap">
                        <!-- Content -->
                        <div class="content">
                            <article class="post_item post_item_single post">
                                <section class="post_featured">
                                    <div class="post_thumb" data-image="{{Storage::url('happenings/'.$eventdetails->image)}}" >
                                        <a class="hover_icon hover_icon_view" href="{{Storage::url('happenings/'.$eventdetails->image)}}">
                                            <img alt="" src="{{Storage::url('happenings/'.$eventdetails->image)}}">
                                        </a>
                                    </div>
                                </section>
                                <section class="post_content">
                                    <div class="post_info">
                                        <span class="post_info_item post_info_posted_by vcard">{{ date('M j, Y', strtotime($eventdetails->created_at)) }}</span>
                                    </div>
                                    <p>{!! $eventdetails->body !!}</p>

                                </section>
                            </article>
                        </div>
                        <!-- /Content -->
                        <!-- Sidebar -->
                        <div class="sidebar widget_area scheme_original">
                            <div class="sidebar_inner widget_area_inner">
                                <!-- Widget: Categories -->
                                <aside class="widget widget_recent_posts">
                                <h5 class="widget_title">Latest Sermons</h5>
                                @if(count($sermons) < 1 )
                                <div class="col-md-12">
                                   <h3>No Top Church Happenings Available.</h3>
                                </div>
                                @endif
                                @foreach($sermons as $eventdetails)
                                <article class="post_item with_thumb first">
                                    <div class="post_thumb">
                                        <img alt="" src="{{Storage::url('happenings/'.$eventdetails->image)}}">
                                    </div>
                                    <div class="post_content">
                                        <h6 class="post_title">
                                            <a href="{{ route('church.happenings', [ 'slug' => $eventdetails->slug]) }}" style="color: white">{{$eventdetails->title}}</a>
                                        </h6>
                                        <div class="post_info">
                                                <span class="post_info_item">
                                                    <a href="#" class="post_info_date">{{ date('M j, Y', strtotime($eventdetails->created_at)) }}</a>
                                                </span>
                                        </div>
                                    </div>
                                </article>
                                @endforeach
                                <!-- /Widget: Search -->
                            </div>
                        </div>
                        <!-- /Sidebar -->
                    </div>
                </div>
                <!-- /Page Content Wrap -->
                <!-- Footer -->
                @include('layouts.footer')
            </div>
            <!-- /Page wrap -->
        </div>
        <!-- /Body wrap -->
        <a href="#" class="scroll_to_top icon-up" title="Scroll to top"></a>


        <script type="text/javascript" src="{{asset('js/jquery/jquery-migrate.min.js')}}"></script>

        <script type="text/javascript" src="{{asset('js/vendor/photostack/modernizr.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/_main.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/_packed.js')}}"></script>

        <script type="text/javascript" src="{{asset('js/vendor/the-events-calendar/jquery-placeholder/jquery.placeholder.min.js')}}"></script>
        <script type='text/javascript' src="{{asset('js/vendor/the-events-calendar/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
        <script type='text/javascript' src="{{asset('js/vendor/the-events-calendar/jquery-resize/jquery.ba-resize.min.js')}}"></script>

        <script type='text/javascript' src="{{asset('js/vendor/the-events-calendar/tribe-events.min.js')}}"></script>
        <script type='text/javascript' src="{{asset('js/vendor/the-events-calendar/tribe-events-bar.min.js')}}"></script>

        <script type="text/javascript" src="{{asset('js/superfish.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/core.utils.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/core.init.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/template.init.min.js')}}"></script>

        <script type="text/javascript" src="{{asset('js/shortcodes.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/core.messages.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/vendor/magnific/jquery.magnific-popup.min.js')}}"></script>

    </body>

</html>
