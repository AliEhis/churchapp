@extends('layouts.app')
@section('title')
More Resources
@endsection
@section('content')
<div class="top_panel_title top_panel_style_3 title_present breadcrumbs_present scheme_original">
    <div class="top_panel_title_inner top_panel_inner_style_3 breadcrumbs_block_bg1">
        <div class="content_wrap">
            <h1 class="page_title">About Us</h1>
        </div>
    </div>
</div>
<!-- /Breadcrumbs -->
<!-- Page Content Wrap -->
<div class="page_content_wrap page_paddings_no">
    <div class="content_wrap">
        <!-- Content -->
        <div class="content">
            <article class="post_item post_item_single page">
                <section class="post_content">

                    <!-- Image alignment -->
                    <a id="toc_images" class="sc_anchor" title="Images" data-description="{Images} - |Image alignments and hover effects" data-icon="icon-picture-1" data-url="" data-separator="no"></a>
                    <div class="sc_line sc_line_position_center_center sc_line_style_solid"></div>
                    <h2 class="sc_title sc_title_regular sc_align_center" style="color: black">WHAT WE BELIEVE</h2>
                    <p class="sc_title sc_title_regular sc_align_center">{!! $general->about_intro !!}</p>
                    <figure class="sc_image alignleft sc_image_shape_square width_280 height_158">
                        <img src="img/group-leaders-meeting-300x200.jpg" alt="" />
                    </figure>
                    <h4 style="color: black">The Bible</h4>
                    <p>Proin dignissim commodo magna at luctus. Nam molestie justo augue, nec eleifend urna laoreet non. Proin ut nulla egestas, hendrerit urna scelerisque, finibus nulla. Integer et elementum sem.</p>
                    <br>
                    <div class="sc_line sc_line_position_center_center sc_line_style_solid"></div>
                    <figure class="sc_image alignright sc_image_shape_square width_280 height_158">
                        <a href="#">
                            <img src="images/image-left-280x158.html" alt="" />
                        </a>
                    </figure>
                    <h4 style="color: black">The Trinity</h4>
                    <p>Mauris vitae quam ligula. In tincidunt sapien sed nibh scelerisque congue. Maecenas ut libero eu metus tincidunt lobortis. Duis accumsan at mauris vel lacinia.</p>
                    <!-- /Image alignment -->
                    <div class="sc_line sc_line_position_center_center sc_line_style_solid" style="visibility: hidden"></div>
                    <figure class="sc_image alignleft sc_image_shape_square width_280 height_158">
                        <img src="img/group-leaders-meeting-300x200.jpg" alt="" />
                    </figure>
                    <div class="sc_line sc_line_position_center_center sc_line_style_solid"></div>
                    <h4 style="color: black">Salvation</h4>
                    <p>Proin dignissim commodo magna at luctus. Nam molestie justo augue, nec eleifend urna laoreet non. Proin ut nulla egestas, hendrerit urna scelerisque, finibus nulla. Integer et elementum sem.</p>
                    <br>
                    <div class="sc_line sc_line_position_center_center sc_line_style_solid"></div>
                    <figure class="sc_image alignright sc_image_shape_square width_280 height_158">
                        <a href="#">
                            <img src="images/image-left-280x158.html" alt="" />
                        </a>
                    </figure>
                    <h4 style="color: black">Water Baptism</h4>
                    <p>Mauris vitae quam ligula. In tincidunt sapien sed nibh scelerisque congue. Maecenas ut libero eu metus tincidunt lobortis. Duis accumsan at mauris vel lacinia.</p>
                    <!-- /Image alignment -->
                    <div class="sc_line sc_line_position_center_center sc_line_style_solid" style="visibility: hidden"></div>
                    <div class="sc_line sc_line_position_center_center sc_line_style_solid"></div>
                    <figure class="sc_image alignleft sc_image_shape_square width_280 height_158">
                        <img src="img/group-leaders-meeting-300x200.jpg" alt="" />
                    </figure>
                    <br>
                    <br>

                    <h4 style="color: black">Communion</h4>
                    <p>Proin dignissim commodo magna at luctus. Nam molestie justo augue, nec eleifend urna laoreet non. Proin ut nulla egestas, hendrerit urna scelerisque, finibus nulla. Integer et elementum sem.<br>
                    jhrvgbb rbjrb trbh btr8t t89tgh</p>
                    <br>
                    <div class="sc_line sc_line_position_center_center sc_line_style_solid"></div>
                    <figure class="sc_image alignright sc_image_shape_square width_280 height_158">
                        <a href="#">
                            <img src="images/image-left-280x158.html" alt="" />
                        </a>
                    </figure>
                    <h4 style="color: black">Relationship with God</h4>
                    <p>Mauris vitae quam ligula. In tincidunt sapien sed nibh scelerisque congue. Maecenas ut libero eu metus tincidunt lobortis. Duis accumsan at mauris vel lacinia.</p>
                    <!-- /Image alignment -->
                </section>
            </article>
        </div>

    </div>
</div>
<div class="page_content_wrap page_paddings_no">
    <div class="content_wrap">
        <!-- Content -->

            <div class="top_panel_title_inner top_panel_inner_style_3 breadcrumbs_block_bg1new">
                <div class="content_wrap">
                    <h1 class="page_title"></h1>
                </div>
            </div>

    </div>
</div>
<div class="tpl_call_to_action_bg1">
    <div class="content_wrap">
        <div class="sc_call_to_action sc_call_to_action_style_1 sc_call_to_action_align_center sc_call_to_action_color_style_2 width_100_per">
            <div class="sc_call_to_action_info">
                <h2 class="sc_call_to_action_title sc_item_title" style="color: black">Learn More</h2>
                <div class="sc_call_to_action_descr sc_item_descr" style="color: black">Everything you need to build an excellent websiten j ji vgbgbniubirv vrvr vrnvirvhv9rhvniv dhfbvdfbvi vdhb dfybvev j.</div>
                <div class="sc_call_to_action_buttons sc_item_buttons">
                    <div class="sc_call_to_action_button sc_item_button">
                        <a href="{{route('resources')}}" class="sc_button sc_button_square sc_button_style_filled sc_button_color_style_3 sc_button_size_large width_100">
                            More Resources</a>
                    </div>
                    <div class="sc_call_to_action_button sc_item_button">
                        <a href="{{route('downloads')}}" class="sc_button sc_button_square sc_button_style_border sc_button_color_style_2 sc_button_size_large">Downloads</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
@endsection
