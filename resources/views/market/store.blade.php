<!DOCTYPE html>
<html lang="en-US" class="scheme_original">


<!-- Mirrored from newlife-church-html.axiomthemes.com/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Aug 2020 17:14:43 GMT -->
<head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="format-detection" content="telephone=no">

        <title>Store | {{$site->site_name}}</title>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Caveat:400,700|Lato:300,300i,400,400i,700,700i|Raleway:300,300i,400,400i,700,700i&amp;subset=latin-ext">
        <link rel="stylesheet" href="css/fontello/css/fontello.css" type="text/css" media="all" />

        <link rel="stylesheet" href="js/vendor/woocommerce/css/woocommerce-layout.css" type="text/css" media="all" />
        <link rel="stylesheet" href="js/vendor/woocommerce/css/woocommerce-smallscreen.css" type="text/css" media="only screen and (max-width: 768px)" />
        <link rel="stylesheet" href="js/vendor/woocommerce/css/woocommerce.css" type="text/css" media="all" />

        <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/core.animation.min.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/shortcodes.min.css" type="text/css" media="all" />

        <link rel="stylesheet" href="css/plugin.instagram-widget.min.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/plugin.woocommerce.min.css" type="text/css" media="all" />

        <link rel="stylesheet" href="css/skin.min.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/responsive.min.css" type="text/css" media="all" />

        <link rel="stylesheet" href="css/core.messages.min.css" type="text/css" media="all" />
        <link rel="stylesheet" href="js/vendor/magnific/magnific-popup.min.css" type="text/css" media="all" />

        <link rel="icon" href="images/favicon.png" />
        <link rel="icon" href="images/favicon.png" />
        <link rel="apple-touch-icon-precomposed" href="images/favicon.png" />
    </head>

    <body class="archive body_style_wide body_filled article_style_stretch scheme_original top_panel_show top_panel_above sidebar_show sidebar_right woocommerce woocommerce-page">
        <a id="toc_home" class="sc_anchor" title="Home" data-description="<i>Return to Home</i> - <br>navigate to home page of the site" data-icon="icon-home" data-url="" data-separator="yes"></a>
        <a id="toc_top" class="sc_anchor" title="To Top" data-description="<i>Back to top</i> - <br>scroll to top of the page" data-icon="icon-double-up" data-url="" data-separator="yes"></a>
        <!-- Body wrap -->
        <div class="body_wrap">
            <!-- Page wrap -->
            <div class="page_wrap">
                <div class="top_panel_fixed_wrap"></div>
                <!-- Header -->
                @include('layouts.main-nav')
                <!-- /Header Mobile -->
                <!-- Breadcrumbs -->
                <div class="top_panel_title top_panel_style_3 title_present breadcrumbs_present scheme_original">
                    <div class="top_panel_title_inner top_panel_inner_style_3 shop_page_breadcrumbs_bg">
                        <div class="content_wrap">
                            <h1 class="page_title">Our Store</h1>
                            <div class="breadcrumbs">
                                <a class="breadcrumbs_item home" href="#">We offer a wide range of resources and gifts to help you on your faith journey</a>
                            </div>
                        </div>
                    </div>
                </div>
                <h3 class="sc_title sc_title_regular sc_title sc_title_regular sc_align_center" style="color: black">Features Products</h3>
                <p class="sc_title sc_title_regular sc_title sc_title_regular sc_align_center" >Here is some of our newest and most popular resources. Check back regularly for new release</p>
                <!-- /Breadcrumbs -->
                <!-- Page Content Wrap -->
                <div class="hp1_testimonials_section">
                    <div class="content_wrap text-center">
                     <h2 class="sc_title sc_title_regular sc_align_left" style="color: white">BOOKS </h2>
                     <P style="color: white" class="sc_title sc_title_regular sc_align_left">content goes in here...</P>
                     <div class="sc_services_wrap sc_title sc_title_regular sc_align_left">
                        <a href="{{route('books')}}" class="sc_button sc_button_square sc_button_style_filled sc_button_color_style_3 sc_button_size_large width_100">
                            VIEW ALL BOOKS</a>
                         </form>
                     </div>
                        </div>
                    </div>
                <div class="page_content_wrap page_paddings_no">
                    <div class="content_wrap">
                        <div class="hp1_blogger_section content_wrap">
                            <div id="sc_blogger_1" class="sc_blogger layout_classic_3 template_masonry margin_top_huge margin_bottom_medium sc_blogger_horizontal sc_scroll_controls sc_scroll_controls_type_top sc_scroll_controls_horizontal">
                                <div id="sc_blogger_1_scroll" class="sc_scroll sc_scroll_horizontal sc_slider_noresize swiper-slider-container scroll-container width_100_per">
                                    <div class="sc_scroll_wrapper swiper-wrapper">
                                        <div class="sc_scroll_slide swiper-slide">
                                            <div class="isotope_wrap" data-columns="3">
                                                <!-- Isotope item -->
                                                @foreach($books as $post)
                                                <div class="isotope_item isotope_item_classic isotope_item_classic_3 isotope_column_3">
                                                    <div class="post_item post_item_classic post_item_classic_3 odd">
                                                        <div class="post_featured">
                                                                <a href="{{ route('store.show', [ 'slug' => $post->slug]) }}">
                                                                    <img src="{{Storage::url('devotion/'.$post->image)}}">
                                                                </a>
                                                            </div>
                                                        <div class="post_content isotope_item_content">
                                                            <a  href="{{ route('store.show', [ 'slug' => $post->slug]) }}">
                                                            <h5 style="color: black">{{ $post->title}}</h5>
                                                            </a>
                                                            <h6 style="color: black">{{$post->author}}</h6>
                                                            <span class="price">
                                                                <span class="woocommerce-Price-amount amount">
                                                                    <span class="woocommerce-Price-currencySymbol">&pound;</span>$ {{$post->price}}
                                                                </span>
                                                            </span>
                                                            <br>
                                                            <a href="#" class="sc_button sc_button_square sc_button_style_border sc_button_color_style_2 sc_button_size_large">ADD TO CART</a>
                                                            {{-- <div class="post_info">
                                                                <span class="post_info_item post_info_posted_by"><i class="fa fa-calendar-o"></i> {{ date('M j, Y', strtotime($property->created_at)) }}</span>
                                                            </div> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                                <!-- /Isotope item -->
                                            </div>
                                        </div>
                                    </div>
                                    <div id="sc_blogger_1_scroll_bar" class="sc_scroll_bar sc_scroll_bar_horizontal sc_blogger_1_scroll_bar"></div>
                                </div>
                                <div class="sc_scroll_controls_wrap">
                                    <a class="sc_scroll_prev" href="#"></a>
                                    <a class="sc_scroll_next" href="#"></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="hp1_testimonials_section">
                    <div class="content_wrap text-center">
                     <h2 class="sc_title sc_title_regular sc_align_left" style="color: white">SERIES </h2>
                     <P style="color: white" class="sc_title sc_title_regular sc_align_left">content goes in here...</P>
                     <div class="sc_services_wrap sc_title sc_title_regular sc_align_left">
                        <a href="{{route('series')}}" class="sc_button sc_button_square sc_button_style_filled sc_button_color_style_3 sc_button_size_large width_100">
                            VIEW ALL SERIES</a>
                     </form>
                     </div>
                        </div>
                    </div>

                    <div class="page_content_wrap page_paddings_no">
                        <div class="content_wrap">
                            <div class="hp1_blogger_section content_wrap">
                                <div id="sc_blogger_1" class="sc_blogger layout_classic_3 template_masonry margin_top_huge margin_bottom_medium sc_blogger_horizontal sc_scroll_controls sc_scroll_controls_type_top sc_scroll_controls_horizontal">
                                    <div id="sc_blogger_1_scroll" class="sc_scroll sc_scroll_horizontal sc_slider_noresize swiper-slider-container scroll-container width_100_per">
                                        <div class="sc_scroll_wrapper swiper-wrapper">
                                            <div class="sc_scroll_slide swiper-slide">
                                                <div class="isotope_wrap" data-columns="3">
                                                    <!-- Isotope item -->
                                                    @foreach($series as $post)
                                                    <div class="isotope_item isotope_item_classic isotope_item_classic_3 isotope_column_3">
                                                        <div class="post_item post_item_classic post_item_classic_3 odd">
                                                            <div class="post_featured">
                                                                    <a href="{{ route('store.show', [ 'slug' => $post->slug]) }}">
                                                                        <img src="{{Storage::url('devotion/'.$post->image)}}">
                                                                    </a>
                                                                </div>
                                                            <div class="post_content isotope_item_content">
                                                                <a  href="{{ route('store.show', [ 'slug' => $post->slug]) }}">
                                                                <h5 style="color: black">{{ $post->title}}</h5>
                                                                </a>
                                                                <h6 style="color: black">{{$post->author}}</h6>
                                                                <span class="price">
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        <span class="woocommerce-Price-currencySymbol">&pound;</span>$ {{$post->price}}
                                                                    </span>
                                                                </span>
                                                                <br>
                                                                <a href="#" class="sc_button sc_button_square sc_button_style_border sc_button_color_style_2 sc_button_size_large">ADD TO CART</a>
                                                                {{-- <div class="post_info">
                                                                    <span class="post_info_item post_info_posted_by"><i class="fa fa-calendar-o"></i> {{ date('M j, Y', strtotime($property->created_at)) }}</span>
                                                                </div> --}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                    <!-- /Isotope item -->
                                                </div>
                                            </div>
                                        </div>
                                        <div id="sc_blogger_1_scroll_bar" class="sc_scroll_bar sc_scroll_bar_horizontal sc_blogger_1_scroll_bar"></div>
                                    </div>
                                    <div class="sc_scroll_controls_wrap">
                                        <a class="sc_scroll_prev" href="#"></a>
                                        <a class="sc_scroll_next" href="#"></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="hp1_testimonials_section">
                        <div class="content_wrap text-center">
                         <h2 class="sc_title sc_title_regular sc_align_left" style="color: white">GIFTS </h2>
                         <P style="color: white" class="sc_title sc_title_regular sc_align_left">content goes in here...</P>
                         <div class="sc_services_wrap sc_title sc_title_regular sc_align_left">
                            <a href="{{route('gifts')}}" class="sc_button sc_button_square sc_button_style_filled sc_button_color_style_3 sc_button_size_large width_100">
                                VIEW ALL GIFTS</a>
                        </form>
                         </div>
                            </div>
                        </div>

                        <div class="page_content_wrap page_paddings_no">
                            <div class="content_wrap">
                                <div class="hp1_blogger_section content_wrap">
                                    <div id="sc_blogger_1" class="sc_blogger layout_classic_3 template_masonry margin_top_huge margin_bottom_medium sc_blogger_horizontal sc_scroll_controls sc_scroll_controls_type_top sc_scroll_controls_horizontal">
                                        <div id="sc_blogger_1_scroll" class="sc_scroll sc_scroll_horizontal sc_slider_noresize swiper-slider-container scroll-container width_100_per">
                                            <div class="sc_scroll_wrapper swiper-wrapper">
                                                <div class="sc_scroll_slide swiper-slide">
                                                    <div class="isotope_wrap" data-columns="3">
                                                        <!-- Isotope item -->
                                                        @foreach($gifts as $post)
                                                        <div class="isotope_item isotope_item_classic isotope_item_classic_3 isotope_column_3">
                                                            <div class="post_item post_item_classic post_item_classic_3 odd">
                                                                <div class="post_featured">
                                                                        <a href="{{ route('store.show', [ 'slug' => $post->slug]) }}">
                                                                            <img src="{{Storage::url('devotion/'.$post->image)}}">
                                                                        </a>
                                                                    </div>
                                                                <div class="post_content isotope_item_content">
                                                                    <a  href="{{ route('store.show', [ 'slug' => $post->slug]) }}">
                                                                    <h5 style="color: black">{{ $post->title}}</h5>
                                                                    </a>
                                                                    <h6 style="color: black">{{$post->author}}</h6>
                                                                    <span class="price">
                                                                        <span class="woocommerce-Price-amount amount">
                                                                            <span class="woocommerce-Price-currencySymbol">&pound;</span>$ {{$post->price}}
                                                                        </span>
                                                                    </span>
                                                                    <br>
                                                                    <a href="#" class="sc_button sc_button_square sc_button_style_border sc_button_color_style_2 sc_button_size_large">ADD TO CART</a>
                                                                    {{-- <div class="post_info">
                                                                        <span class="post_info_item post_info_posted_by"><i class="fa fa-calendar-o"></i> {{ date('M j, Y', strtotime($property->created_at)) }}</span>
                                                                    </div> --}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                        <!-- /Isotope item -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="sc_blogger_1_scroll_bar" class="sc_scroll_bar sc_scroll_bar_horizontal sc_blogger_1_scroll_bar"></div>
                                        </div>
                                        <div class="sc_scroll_controls_wrap">
                                            <a class="sc_scroll_prev" href="#"></a>
                                            <a class="sc_scroll_next" href="#"></a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                <!-- /Page Content Wrap -->
                <!-- Footer -->
                @include('layouts.footer')
                <!-- /Copyright -->
            </div>
            <!-- /Page wrap -->
        </div>
        <!-- /Body wrap -->

        <a href="#" class="scroll_to_top icon-up" title="Scroll to top"></a>

        @include('layouts.js')

    </body>
</html>
