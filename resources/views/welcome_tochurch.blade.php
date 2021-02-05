@extends('layouts.app')
@section('title')
Welcome To Church
@endsection
@section('content')
<div class="top_panel_title top_panel_style_3 title_present breadcrumbs_present scheme_original">
    <div class="top_panel_title_inner top_panel_inner_style_3 breadcrumbs_block_bg1">
        <div class="content_wrap">
            <h1 class="page_title">The Church Experience</h1>
        </div>
    </div>
</div>
<div class="page_content_wrap page_paddings_no">
    <div class="content_wrap">
        <!-- Content -->
        <div class="content">
            <article class="post_item page">
                <section class="post_content">
                    <!-- /Audio Player -->
                    <div class="sc_line sc_line_position_center_center sc_line_style_solid" style="visibility: hidden"></div>
                    <h3 class="sc_title sc_title_regular sc_title sc_title_regular sc_align_center" style="color: black">Expect Great Things</h3>
                    <p class="sc_title sc_title_regular sc_title sc_title_regular sc_align_center">content goes in here...</p>
                    <div class="sc_video_player">
                        <div class="sc_video_frame width_100_per" data-width="100%" data-height="659">
                            <iframe class="video_frame" src="https://player.vimeo.com/video/72586348" width="100%" height="659" webkitAllowFullScreen="webkitAllowFullScreen" mozallowfullscreen="mozallowfullscreen" allowFullScreen="allowFullScreen"></iframe>
                        </div>
                    </div>

                    <br>
<h3 class="sc_title sc_title_regular sc_title sc_title_regular sc_align_center" style="color: black">EVERYONE'S WELCOME TO OUR CHURCH</h3>

                    <!-- /Charts -->
                </section>

            </article>

        </div>

    </div>


        </div>



<div class="page_content_wrap page_paddings_no">
    <div class="content_wrap">
        <!-- Content -->
        <div class="content">
            <article class="post_item post_item_single page">
                <section class="post_content">

                    <!-- Image alignment -->
                    <a id="toc_images" class="sc_anchor" title="Images" data-description="{Images} - |Image alignments and hover effects" data-icon="icon-picture-1" data-url="" data-separator="no"></a>

                    <figure class="sc_image alignleft sc_image_shape_square width_280 height_158">
                        <img src="img/group-leaders-meeting-300x200.jpg" alt="" />
                    </figure>
                    <br>
                    <h4 style="color: black">Amazing Speakers</h4>
                    <p>Proin dignissim commodo magna at luctus. Nam molestie justo augue, nec eleifend urna laoreet non. Proin ut nulla egestas, hendrerit urna scelerisque, finibus nulla. Integer et elementum sem.</p>
                    <br>
                    <div class="hp1_testimonials_section">
                        <div class="content_wrap text-center">
                         <h2 class="sc_title sc_title_regular sc_align_left" style="color: white">Powerful Worship </h2>
                         <P style="color: white" class="sc_title sc_title_regular sc_align_left">content goes in here...</P>
                        </div>
                    </div>
                    <div class="sc_line sc_line_position_center_center sc_line_style_solid" style="visibility: hidden"></div>
                    <figure class="sc_image alignleft sc_image_shape_square width_280 height_158">
                        <img src="img/group-leaders-meeting-300x200.jpg" alt="" />
                    </figure>
                    <div class="sc_line sc_line_position_center_center sc_line_style_solid"></div>
                    <h4 style="color: black">Can We Go To Church Again?</h4>
                    <p>Proin dignissim commodo magna at luctus. Nam molestie justo augue, nec eleifend urna laoreet non. Proin ut nulla egestas, hendrerit urna scelerisque, finibus nulla. Integer et elementum sem.</p>
                    <a href="{{route('downloads')}}" class="sc_button sc_button_square sc_button_style_border sc_button_color_style_2 sc_button_size_large">LEARN MORE</a>
                    <br>
                    <br>
                    <div class="hp1_testimonials_section">
                        <div class="content_wrap text-center">
                         <h2 class="sc_title sc_title_regular sc_align_left" style="color: white">Everyone is Welcome</h2>
                         <P style="color: white" class="sc_title sc_title_regular sc_align_left">content goes in here...</P>
                        </div>
                    </div>
                    <br>
                    <div class="sc_line sc_line_position_center_center sc_line_style_solid" style="visibility: hidden"></div>
                    <figure class="sc_image alignleft sc_image_shape_square width_280 height_158">
                        <img src="img/group-leaders-meeting-300x200.jpg" alt="" />
                    </figure>
                    <div class="sc_line sc_line_position_center_center sc_line_style_solid"></div>
                    <h4 style="color: black">Join Us This Weekend!</h4>
                    <p>Proin dignissim commodo magna at luctus. Nam molestie justo augue, nec eleifend urna laoreet non. Proin ut nulla egestas, hendrerit urna scelerisque, finibus nulla. Integer et elementum sem.</p>
                    <a href="{{route('servicetime')}}" class="sc_button sc_button_square sc_button_style_border sc_button_color_style_2 sc_button_size_large">LEARN MORE</a>
 <br>
 <br>
 <br>
                </section>
            </article>
        </div>

    </div>
</div>

@endsection
