@extends('layouts.app')
@section('title')
Home
@endsection
@section('content')

<div class="page_content_wrap page_paddings_no">
    <div class="content">
        <article class="post_item post_item_single page">
            <section class="post_content">
                <!-- Next event section -->
                <div class="hp1_next_event_section tpl_add_bg">
                    <div class="content_wrap">
                        <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_3 margin_bottom_null">
                            <div class="column-1_22 sc_column_item sc_column_item_1 odd first">
                                <div class="sc_section">
                                    <div class="sc_section_inner">
                                        <h3 class="sc_title sc_title_regular hp1_event_title_1 tpl_light">Next</h3>
                                        <h3 class="sc_title sc_title_regular hp1_event_title_1 tpl_light">Upcoming Event:</h3>
                                        <h4 class="sc_title sc_title_regular tpl_light font_weight_400">{{$countdown->title}}</h4>
                                    </div>
                                </div>
                            </div><div class="column-1_20 sc_column_item sc_column_item_2 even">
                                <div id="sc_countdown_1" class="sc_countdown sc_countdown_style_1  margin_top_null" data-date="2017-04-10" data-time="12:00:00">
                                    <div class="sc_countdown_inner">
                                        <div class="sc_countdown_item sc_countdown_days">
                                            <span class="sc_countdown_digits">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </span>
                                            <span class="sc_countdown_label">Days</span>
                                        </div>
                                        <div class="sc_countdown_separator">:</div>
                                        <div class="sc_countdown_item sc_countdown_hours">
                                            <span class="sc_countdown_digits">
                                                <span></span>
                                                <span></span>
                                            </span>
                                            <span class="sc_countdown_label">Hours</span>
                                        </div>
                                        <div class="sc_countdown_separator">:</div>
                                        <div class="sc_countdown_item sc_countdown_minutes">
                                            <span class="sc_countdown_digits">
                                                <span></span>
                                                <span></span>
                                            </span>
                                            <span class="sc_countdown_label">Minutes</span>
                                        </div>
                                        <div class="sc_countdown_separator">:</div>
                                        <div class="sc_countdown_item sc_countdown_seconds">
                                            <span class="sc_countdown_digits">
                                                <span></span>
                                                <span></span>
                                            </span>
                                            <span class="sc_countdown_label">Seconds</span>
                                        </div>
                                        <div class="sc_countdown_placeholder hide"></div>
                                    </div>
                                </div>
                            </div><div class="column-1_21 sc_column_item sc_column_item_3 odd">
                                <div class="sc_section aligncenter margin_top_null">
                                    <div class="sc_section_inner">
                                        <a href="#" class="sc_button sc_button_square sc_button_style_border sc_button_color_style_4 sc_button_size_large">EVENT DETAIL</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!-- /Next event section -->
                <!-- Welcome section -->
                <div class="hp1_welcome_section">
                    <div class="content_wrap">
                        <div class="columns_wrap">
                          <div class="column-1_2 sc_column_item sc_column_item_1 odd first">
                            <figure class="sc_image sc_image_shape_square">
                                <a href="#">
                                    <img class = "shadowimg" width= "80%"  src="{{$general->introimage}}" alt="" />
                                </a>
                            </figure>
                          </div><div class="column-1_2 sc_column_item sc_column_item_2 even">
                            <!-- Services section -->
                        <div class="sc_services_wrap">
                            <div class="sc_services sc_services_style_services-5 sc_services_type_icons sc_slider_nopagination sc_slider_nocontrols width_100_per" data-interval="5040" data-slides-min-width="250">
                                <h2 style="color: black">David and Tamara Simpsons</h2>
                                <div class="sc_services_descr sc_item_descr">{!! $general->home_intro !!}</div>
                                <a href="{{route('welcome')}}" class="sc_button sc_button_square sc_button_style_filled sc_button_color_style_3 sc_button_size_large width_100">
                                    Welcome To Church</a>
                                <a href="{{route('newhere')}}" class="sc_button sc_button_square sc_button_style_border sc_button_color_style_2 sc_button_size_large">New Here? </a>
                            </div>
                        </div>
                    </div>
                        <!-- /Services section -->

                        </div>
                    </div>
                </div>
                <!-- /Welcome section -->
                <!-- Donation section -->
                <div class="hp1_testimonials_section">
                <div class="hp2_testimonials_section">
                    <div class="content_wrap">
                        <div class="sc_section column-7_10">
                            <div class="sc_section_inner">
                                <div class="sc_section alignleft">
                                    <div class="sc_section_inner">
                                        <h1 class="donation_title_custom"><u>This Week At Our Church</u></h1>
                                        <h2 class="sc_title sc_title_cursive sc_align_right space">{{$upcomingevent->minister}}</h2>
                                        <h3 class="text-center">{{$upcomingevent->day}} at {{ date('h:ia', strtotime($upcomingevent->time)) }} & {{ date('h:ia', strtotime($upcomingevent->time2)) }}</h3>
                                        <a href="{{route('servicetime')}}" class="sc_button sc_button_square sc_button_style_border sc_button_color_style_2 sc_button_size_large">Speaking Schedule</a>
                                        <a href="{{route('newhere')}}" class="sc_button sc_button_square sc_button_style_border sc_button_color_style_2 sc_button_size_large">Experience Church</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- /Donation section -->
                <div class="hp1_join_us_section accent1_bgc">
                    <div class="content_wrap">
                        <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_4 column_resizer">
                            <div class="column-2_4 sc_column_item sc_column_item_1 odd first span_2">
                                <h2 class="hp1_join_us_info custom_heading_1"><a href="{{route('servicetime')}}"> Service Times</a></h2>
                            </div><div class="column-1_4 sc_column_item sc_column_item_3 odd after_span_2">
                                <div class="sc_section join_us_custom_block_1">
                                </div>
                            </div><div class="column-1_4 sc_column_item sc_column_item_4 even text_align_center margin_top_0_5em">
                                <h2 class="hp1_join_us_info custom_heading_1"><a href="{{route('servicetime')}}" style="float: right"><font color="fca44a"> See Full Schedule ></font></a></h2>
                            </div>
                        </div>
                        <hr class="servicetime">

                            <h2 class="hp1_join_us_info custom_heading_1" style="float: left"><a href="{{route('servicetime')}}"> {{$upcomingevent->day}} at {{ date('h:ia', strtotime($upcomingevent->time)) }} & {{ date('h:ia', strtotime($upcomingevent->time2)) }}</a></h2>


                            <h2 class="hp1_join_us_info custom_heading_1"><a href="{{route('servicetime')}}" style="float: right"> {{$upcomingevent->day}} at {{ date('h:ia', strtotime($upcomingevent->time)) }}</a></h2>

                        </div>
                    </div>
                </div>




                <!-- Blogger section -->
                <div class="hp1_blogger_section content_wrap">
                    <div id="sc_blogger_1" class="sc_blogger layout_classic_3 template_masonry margin_top_huge margin_bottom_medium sc_blogger_horizontal sc_scroll_controls sc_scroll_controls_type_top sc_scroll_controls_horizontal">
                        <h3 class="sc_title sc_title_regular sc_align_center blogtitle" style="color: black">HAPPENINGS IN CHURCH NOW </h3>
                        <div id="sc_blogger_1_scroll" class="sc_scroll sc_scroll_horizontal sc_slider_noresize swiper-slider-container scroll-container width_100_per">
                            <div class="sc_scroll_wrapper swiper-wrapper">
                                <div class="sc_scroll_slide swiper-slide">
                                    <div class="isotope_wrap" data-columns="3">
                                        <!-- Isotope item -->
                                        @foreach($happenings as $property)
                                        <div class="isotope_item isotope_item_classic isotope_item_classic_3 isotope_column_3">
                                            <div class="post_item post_item_classic post_item_classic_3 odd">
                                                <div class="post_featured">
                                                    <div class="post_thumb" data-title="Be Inspired by Biblical Teaching">
                                                        <a class="hover_icon hover_icon_link" href="{{ route('church.happenings', [ 'slug' => $property->slug]) }}">
                                                            <img alt="Be Inspired by Biblical Teaching" src="{{Storage::url('happenings/'.$property->image)}}">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="post_content isotope_item_content">
                                                    <a  href="{{ route('church.happenings', [ 'slug' => $property->slug]) }}">
                                                    <h5 class="post_title" style="color: black">{{ $property->title}}</h5>
                                                    </a>
                                                    {{-- <div class="post_info">
                                                        <span class="post_info_item post_info_posted_by"><i class="fa fa-calendar-o"></i> {{ date('M j, Y', strtotime($property->created_at)) }}</span>
                                                    </div> --}}
                                                    <div class="post_descr">
                                                        <p align="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                                            <br>
                                                            <a href="{{ route('church.happenings', [ 'slug' => $property->slug]) }}" style="color: #fca44a"> Learn More ></a>
                                                        </p>
                                                    </div>
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
                <div class="greeting_section_bg">
                    <div class="content_wrap">
                        <div class="sc_call_to_action sc_call_to_action_style_1 sc_call_to_action_align_center sc_call_to_action_color_style_2 width_100_per">
                            <div class="sc_call_to_action_info">
                                <h3 class="sc_call_to_action_title sc_item_title apptitle" style="color: black">CONNECT WITH US ON OUR MOBILE APP</h3>
                                <h3 class="sc_call_to_action_descr sc_item_descr" style="color: black; font-weight:bold">GET OUR CHURCH MOBILE APP:</h3>
                                <div class="sc_call_to_action_buttons sc_item_buttons">
                                    <div class="sc_call_to_action_button sc_item_button">
                                        <a href="#">
                                        <img src="{{asset('img/apple-logo.png')}}" class="sc_image alignleft sc_image_shape_square width_280 height_150">
                                        </a>
                                    </div>
                                    <div class="sc_call_to_action_button sc_item_button">
                                        <a href="#">
                                        <img src="{{asset('img/google-logo.png')}}" class="sc_image alignleft sc_image_shape_square width_280 height_150">
                                        </a>
                                    </div>
                                </div>
                                <h5 style="color: black">OR</h5>

                                <p style="color: black; font-size: 1.2em">Or stay Connected and join our conversation via socila media on Youtube, Facebook, Instagram and Twitter</p>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- /Blogger section -->
                <div class="hp1_join_us_section accent1_bgc">
                    <div class="content_wrap">
                        <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_4 column_resizer">

                            <div class="sc_socials sc_socials_type_icons sc_socials_shape_round sc_socials_size_tiny" style="display: flex;
    justify-content: space-between;">
                                <div class="sc_socials_item">
                                    <a href="#" target="_blank" class="social_icons social_twitter">
                                        <span class="icon-youtube"></span>
                                    </a>
                                </div>
                                <div class="sc_socials_item">
                                    <a href="#" target="_blank" class="social_icons social_twitter">
                                        <span class="icon-twitter"></span>
                                    </a>
                                </div>
                                <div class="sc_socials_item">
                                    <a href="#" target="_blank" class="social_icons social_instagramm">
                                        <span class="icon-instagramm"></span>
                                    </a>
                                </div>
                                <div class="sc_socials_item">
                                    <a href="#" target="_blank" class="social_icons social_facebook">
                                        <span class="icon-facebook"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- <div class="hp1_join_us_section accent1_bgc">
                    <div class="columns_wrap sc_skills_columns sc_skills_columns_4">
                        <!-- Skills item -->
                        <div class="sc_skills_column column-1_4">
                            <div class="sc_skills_item sc_skills_style_1 odd first">
                                <div class="sc_skills_icon icon-facebook">
                                </div>
                            </div>
                        </div><!-- /Skills item --><!-- Skills item -->
                        <div class="sc_skills_column column-1_4">
                            <div class="sc_skills_item sc_skills_style_1 even">
                                <div class="sc_skills_icon icon-twitter"></div>
                            </div>
                        </div><!-- /Skills item --><!-- Skills item -->
                        <div class="sc_skills_column column-1_4">
                            <div class="sc_skills_item sc_skills_style_1 even">
                                <div class="sc_skills_icon icon-twitter"></div>
                            </div>
                        </div>
                        <div class="sc_skills_column column-1_4">
                            <div class="sc_skills_item sc_skills_style_1 odd">
                                <div class="sc_skills_icon icon-youtube"></div>
                            </div>
                        </div>
                    </div>
                </div> --}}

                <div class="hp1_testimonials_section padd">
                <div class="hp2_testimonials_section">
                    <div class="content_wrap text-center">
                     <h2 class="sc_title sc_title_regular sc_align_center" style="color: white">STAY CONNECTED </h2>
                     <P style="color: white" class="sc_title sc_title_regular sc_align_center newsize" >Subscribe to our weekely newsletter to stay up to date with every happenings</P>
                     <div class="sc_services_wrap sc_title sc_title_regular sc_align_center">
                     <form class="prayer-request" action="{{route('news.letter.post')}}" method="post">
                        @csrf
                     <input type="text" name="email" placeholder="Enter your email" size="100">

                     <input type="submit" value="Subscribe" class="sc_button sc_button_square sc_button_style_filled sc_button_color_style_3 "/>
                     </form>
                     </div>
                    </div>
                </div>
                </div>
            </section>
        </article>
    </div>
</div>
<!-- /Page Content Wrap -->




@endsection
