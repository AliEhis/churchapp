@extends('layouts.app')
@section('title')
New Life In Christ
@endsection
@section('content')
<div class="top_panel_title top_panel_style_3 title_present breadcrumbs_present scheme_original">
    <div class="top_panel_title_inner top_panel_inner_style_3 breadcrumbs_block_bg1">
        <div class="content_wrap">
            <h1 class="page_title">New Life In Christ </h1>
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
                    <h3 class="sc_title sc_title_regular">Vimeo Player</h3>
                    <div class="sc_video_player">
                        <div class="sc_video_frame width_100_per" data-width="100%" data-height="659">
                            <iframe class="video_frame" src="https://player.vimeo.com/video/72586348" width="100%" height="659" webkitAllowFullScreen="webkitAllowFullScreen" mozallowfullscreen="mozallowfullscreen" allowFullScreen="allowFullScreen"></iframe>
                        </div>
                    </div>

<br>
            <p>content goes here...</p>
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
                    <h4 style="color: black">New Beginings Class</h4>
                    <p>Proin dignissim commodo magna at luctus. Nam molestie justo augue, nec eleifend urna laoreet non. Proin ut nulla egestas, hendrerit urna scelerisque, finibus nulla. Integer et elementum sem.</p>
                    <a href="{{route('newhere')}}" class="sc_button sc_button_square sc_button_style_border sc_button_color_style_2 sc_button_size_large">GET STARTED </a>
                    <br>
                    <div class="sc_line sc_line_position_center_center sc_line_style_solid"></div>
                    <figure class="sc_image alignright sc_image_shape_square width_280 height_158">
                        <a href="#">
                            <img src="images/image-left-280x158.html" alt="" />
                        </a>
                    </figure>
                    <h4 ><a href="{{route('homecell')}}" style="color: black"> Find A Home cell Group </a></h4>
                    <p>Mauris vitae quam ligula. In tincidunt sapien sed nibh scelerisque congue. Maecenas ut libero eu metus tincidunt lobortis. Duis accumsan at mauris vel lacinia.</p>
                    <!-- /Image alignment -->
                    <div class="sc_line sc_line_position_center_center sc_line_style_solid" style="visibility: hidden"></div>
                    <figure class="sc_image alignleft sc_image_shape_square width_280 height_158">
                        <img src="img/group-leaders-meeting-300x200.jpg" alt="" />
                    </figure>
                    <div class="sc_line sc_line_position_center_center sc_line_style_solid"></div>
                    <h4 style="color: black">Our Daily Divotional</h4>
                    <p>Proin dignissim commodo magna at luctus. Nam molestie justo augue, nec eleifend urna laoreet non. Proin ut nulla egestas, hendrerit urna scelerisque, finibus nulla. Integer et elementum sem.</p>
                    <a href="{{route('downloads')}}" class="sc_button sc_button_square sc_button_style_border sc_button_color_style_2 sc_button_size_large">DOWNLOAD</a>
                    <br>
                    <br>
                    <br>
                    <div class="sc_call_to_action_descr sc_item_descr sc_title sc_title_regular sc_align_center" style="color: black">For more information about New Beginings, contact 231-099-123 or email newbegining@church.com</div>
                </section>
            </article>
        </div>

    </div>
</div>

@endsection
