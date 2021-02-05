<!DOCTYPE html>
<html lang="en-US" class="scheme_original">

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

    <body class="single single-tribe_events body_style_wide body_filled article_style_stretch scheme_original top_panel_show top_panel_above sidebar_hide events-single tribe-events-style-full church tribe-events-page-template">
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
                                <a class="breadcrumbs_item home">{{ date('M j, Y', strtotime($eventdetails->created_at)) }}</a>
                                <span class="breadcrumbs_delimiter"></span>
                                <span class="breadcrumbs_item current">2:00pm</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Breadcrumbs -->
                <!-- Page Content Wrap -->
                <div class="page_content_wrap page_paddings_yes">
                    <div class="content_wrap">
                        <!-- Content -->
                        <div class="content">
                            <section class="post tribe_events_wrapper">
                                <article class="post_content">
                                    <div id="tribe-events-pg-template">
                                        <div id="tribe-events" class="tribe-no-js" data-live_ajax="1" data-datepicker_format="0" data-category="">
                                             <span class="tribe-events-ajax-loading">
                                                 <img class="tribe-events-spinner-medium" src="{{asset('js/vendor/the-events-calendar/images/tribe-loading.gif')}}" alt="Loading Events" /></span>
                                            <div id="tribe-events-content" class="tribe-events-single">
                                                <!-- Notices -->
                                                <h1 class="tribe-events-single-event-title sc_title sc_title_regular sc_align_center" style="color: black">{{$eventdetails->title}}</h1>
                                                <div class="tribe_events type-tribe_events">
                                                    <div class="tribe-events-event-image">
                                                        <img src="{{asset('images/wow-conference.jpg')}}" alt="" />
                                                    </div>
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <a id="toc_quotes" class="sc_anchor" title="Quotes" data-description="{Quotes} - |Quote style demonstration" data-icon="icon-quote-1" data-url="" data-separator="no"></a>
                                                    <h2 class="sc_title sc_title_regular">Blockquotes</h2>
                                                    <p>{!! $eventdetails->body !!}</p>
                                                    <blockquote cite="#" class="sc_quote sc_quote_style_1">
                                                        <p>Always bear in mind that your own resolution to succeed is more important than any other.</p>
                                                        <p class="sc_quote_title">
                                                            <a href="#">Albert Einstein</a>
                                                        </p>
                                                    </blockquote>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </section>
                            <a id="toc_images" class="sc_anchor" title="Images" data-description="{Images} - |Image alignments and hover effects" data-icon="icon-picture-1" data-url="" data-separator="no"></a>
                            <div class="sc_line sc_line_position_center_center sc_line_style_solid"></div>
                            <h2 class="sc_title sc_title_regular sc_align_center" style="color: black">Speakers</h2>
                            <figure class="sc_image alignleft sc_image_shape_square width_280 height_158">
                                <img src="{{asset('img/group-leaders-meeting-300x200.jpg')}}" alt="" />
                            </figure>
                            <h4 style="color: black">David and Tamara Simpsons</h4>
                            <p>Proin dignissim commodo magna at luctus. Nam molestie justo augue, nec eleifend urna laoreet non. Proin ut nulla egestas, hendrerit urna scelerisque, finibus nulla. Integer et elementum sem.</p>
                            <br>
                        </div>

                        <!-- /Content -->
                    </div>
                </div>
                <div class="hp1_mission_sectionnew sc_title sc_title_regular sc_align_center">
                    <div class="content_wrap">
                        <div class="columns_wrap sc_columns columns_fluid no_margins sc_columns_count_2">
                            <div class="column-1_2 sc_column_item sc_column_item_1 odd first">
                                <h2 class="sc_title sc_title_regular sc_align_center">{{$eventdetails->title}}</h2>
                                <p class="sc_title sc_title_regular sc_align_center" style="color: white">  {{ date('M j, Y', strtotime($eventdetails->event_date)) }}</p>
                                <p class="sc_title sc_title_regular sc_align_center" style="color: white">  {{ date('h:ia', strtotime($eventdetails->event_time)) }}</p>
                                <p class="sc_title sc_title_regular sc_align_center" style="color: white">Venue: {{$eventdetails->venue}}</p>
                        </div>
                    </div>
                </div>
                <!-- /Page Content Wrap -->
                @include('layouts.footer')
            </div>
        </div>

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
