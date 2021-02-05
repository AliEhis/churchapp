@extends('layouts.app')
@section('title')
Connect
@endsection
@section('content')

<div class="top_panel_title top_panel_style_3 title_present breadcrumbs_present scheme_original">
    <div class="top_panel_title_inner top_panel_inner_style_3 breadcrumbs_block_bg4">
        <div class="content_wrap">
            <h1 class="page_title">Connect</h1>
            <div class="breadcrumbs">
                <a class="breadcrumbs_item home" href="{{url('/')}}">Home</a>
                <span class="breadcrumbs_delimiter"></span>
                <span class="breadcrumbs_item current">the best way to be connected is through service.<br>
                    people ofter say that  their  service teams become their family</span>
            </div>
        </div>
    </div>
</div>
<!-- /Breadcrumbs -->
<!-- Page Content Wrap -->
<h3 class="sc_title sc_title_regular sc_align_center" style="color: black">HOW TO GET CONNECTED </h3>
<p class="sc_title sc_title_regular sc_align_center">One of the best way to get connected and build a strong relationship at our church is by joining<br>
    <strong>A TEAM or GROUP</strong></p>
<div class="page_content_wrap page_paddings_no">
    <div class="content_wrap">
        <!-- Content -->
        <div class="content">
            <!-- Sermons item -->
            <article class="post_item post_item_sermons odd sermons">
                <div class="post_featured">
                    <div class="post_thumb" data-title="Good Friday &#038; Easter Sunday">
                        <a class="hover_icon hover_icon_link" href="{{route('volunteer')}}">
                            <img alt="" src="images/sermons2-370x288.html">
                        </a>
                    </div>
                </div>
                <div class="post_content clearfix">
                    <h4 class="post_title">
                        <a href="{{route('volunteer')}}" style="color: black">Join Our Volunteer Team</a>
                    </h4>
                    <div class="post_descr">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <div class="post_info">
                            <a href="{{route('volunteer')}}" class="sc_button sc_button_square sc_button_style_filled sc_button_color_style_3 sc_button_size_large">Join</a>
                        </div>
                    </div>
                </div>
            </article>
            <article class="post_item post_item_sermons odd sermons">
                <div class="post_featured">
                    <div class="post_thumb" data-title="Good Friday &#038; Easter Sunday">
                        <a class="hover_icon hover_icon_link" href="{{route('homecell')}}">
                            <img alt="" src="images/sermons2-370x288.html">
                        </a>
                    </div>
                </div>
                <div class="post_content clearfix">
                    <h4 class="post_title">
                        <a href="{{route('homecell')}}" style="color: black">Join A Home Cell Group </a>
                    </h4>
                    <div class="post_descr">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <div class="post_info">
                            <a href="{{route('homecell')}}" class="sc_button sc_button_square sc_button_style_filled sc_button_color_style_3 sc_button_size_large">JOIN</a>
                        </div>
                    </div>
                </div>
            </article>
            <article class="post_item post_item_sermons odd sermons">
                <div class="post_featured">
                    <div class="post_thumb" data-title="Good Friday &#038; Easter Sunday">
                        <a class="hover_icon hover_icon_link" href="sermons-single.html">
                            <img alt="" src="images/sermons2-370x288.html">
                        </a>
                    </div>
                </div>
                <div class="post_content clearfix">
                    <h4 class="post_title">
                        <a href="{{route('give')}}" style="color: black">Give</a>
                    </h4>
                    <div class="post_descr">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <div class="post_info">
                            <a href="{{route('give')}}" class="sc_button sc_button_square sc_button_style_filled sc_button_color_style_3 sc_button_size_large">GIVE</a>
                        </div>
                    </div>
                </div>
            </article>
            <article class="post_item post_item_sermons odd sermons">
                <div class="post_featured">
                    <div class="post_thumb" data-title="Good Friday &#038; Easter Sunday">
                        <a class="hover_icon hover_icon_link" href="{{route('volunteer')}}">
                            <img alt="" src="images/sermons2-370x288.html">
                        </a>
                    </div>
                </div>
                <div class="post_content clearfix">
                    <h4 class="post_title">
                        <a href="{{route('mission')}}" style="color: black">Mission </a>
                    </h4>
                    <div class="post_descr">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <div class="post_info">
                            <a href="{{route('mission')}}" class="sc_button sc_button_square sc_button_style_filled sc_button_color_style_3 sc_button_size_large">LEARN MORE</a>
                        </div>
                    </div>
                </div>
            </article>
        </div>
        <!-- /Content -->

    </div>
    <!-- </div> class="content_wrap"> -->
</div>
<div class="hp1_testimonials_section">
    <div class="content_wrap text-center">
     <h2 class="sc_title sc_title_regular sc_align_center" style="color: white">STAY CONNECTED </h2>
     <P style="color: white" class="sc_title sc_title_regular sc_align_center">Subscribe to our weekely newsletter to stay up to date with every happenings</P>
     <div class="sc_services_wrap sc_title sc_title_regular sc_align_center">
     <form class="prayer-request" action="{{route('news.letter.post')}}" method="post">
        @csrf
     <input type="text" name="email" placeholder="Enter your email" size="100">

     <input type="submit" value="Subscribe" class="sc_button sc_button_square sc_button_style_filled sc_button_color_style_3 "/>
     </form>
     </div>
        </div>
    </div>
<!-- /P

@endsection
