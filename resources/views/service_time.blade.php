@extends('layouts.app')
@section('title')
Service Times
@endsection
@section('content')

<div class="top_panel_title top_panel_style_3 title_present breadcrumbs_present scheme_original">
    <div class="top_panel_title_inner top_panel_inner_style_3 breadcrumbs_block_bg3">
        <div class="content_wrap">
            <h1 class="page_title">Service Time and Speaking Schedules</h1>

        </div>
    </div>
</div>
<!-- /Breadcrumbs -->
<div class="page_content_wrap page_paddings_no">
    <div class="content_wrap">
        <!-- Content -->
        <div class="content">
            <article class="post_item post_item_single page">
                <section class="post_content">

                    <!-- Image alignment -->
                    <a id="toc_images" class="sc_anchor" title="Images" data-description="{Images} - |Image alignments and hover effects" data-icon="icon-picture-1" data-url="" data-separator="no"></a>
                    <h2 class="sc_title sc_title_regular sc_align_center" style="color: black">Our Services</h2>
                    <p class="sc_title sc_title_regular sc_align_center">Below you would find our services and our upcoming line of speakers. Each service is 90 minutes long<br>
                    and it is packed with uplifiting music, powerful worship and inspiring messages.</p>

                    <h3 style="color: black">Services Times </h3>
                    <div class="sc_line sc_line_position_center_center sc_line_style_solid"></div>
                    <div class="general_info_section">
                        <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_3 margin_bottom_large">
                            <div class="column-1_3 sc_column_item sc_column_item_1 odd first">
                                <div class="gi_block">
                                    <h3 class="sc_title sc_title_regular tpl_light" style="color: black">Sunday Service</h3>
                                    <p>7:00 am Worship Service (1st Service)</p>
                                    <p>9:00 am worship Service (2nd Service)</p>
                                </div>
                            </div><div class="column-1_3 sc_column_item sc_column_item_2 even">
                                <div class="gi_block">
                                    <h3 class="sc_title sc_title_regular tpl_light" style="color: black">Tuesday Service</h3>
                                    <p>7:00 am Worship Service (1st Service)</p>
                                    <p>9:00 am worship Service (2nd Service)</p>
                                </div>
                            </div><div class="column-1_3 sc_column_item sc_column_item_3 last">
                                <div class="gi_block">
                                    <h3 class="sc_title sc_title_regular tpl_light" style="color: black">Friday Service</h3>
                                    <p>7:00 am Worship Service (1st Service)</p>
                                    <p>9:00 am worship Service (2nd Service)</p>
                                </div>
                            </div>
                        </div>
                    </div>
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
                    <h3 class="sc_title sc_title_regular sc_align_center" style="color: black">Coming Up at Our Church</h3>
                    <div class="sc_line sc_line_position_center_center sc_line_style_solid"></div>
                    <h4 class="sc_title sc_title_regular sc_align_center" style="color: black">Wednesday, July 22nd</h4>
                    <figure class="sc_image alignleft sc_image_shape_square width_280 height_158">
                        <img src="img/group-leaders-meeting-300x200.jpg" alt="" />
                    </figure>
                    <h4 style="color: black">Pastor David Simpsons</h4>
                    <p>Worship Service</p>
                    <p>6:30pm</p>
                    <br>
                    <div class="sc_line sc_line_position_center_center sc_line_style_solid"></div>
                    <h4 class="sc_title sc_title_regular sc_align_center" style="color: black">Wednesday, July 22nd</h4>
                    <figure class="sc_image alignleft sc_image_shape_square width_280 height_158">
                        <img src="img/group-leaders-meeting-300x200.jpg" alt="" />
                    </figure>
                    <h4 style="color: black">Pastor David Simpsons</h4>
                    <p>Worship Service</p>
                    <p>6:30pm</p>
                    <!-- /Image alignment -->
                    <div class="sc_line sc_line_position_center_center sc_line_style_solid"></div>
                    <h4 class="sc_title sc_title_regular sc_align_center" style="color: black">Wednesday, July 22nd</h4>
                    <figure class="sc_image alignleft sc_image_shape_square width_280 height_158">
                        <img src="img/group-leaders-meeting-300x200.jpg" alt="" />
                    </figure>
                    <h4 style="color: black">Pastor David Simpsons</h4>
                    <p>Worship Service</p>
                    <p>6:30pm</p>
                    <br>
                    <div class="sc_line sc_line_position_center_center sc_line_style_solid"></div>
                    <div class="sc_services_wrap sc_title sc_title_regular sc_align_center">
                    <a href="{{route('events')}}" class="sc_button sc_button_square sc_button_style_filled sc_button_color_style_3 sc_button_size_large width_100">
                        SEE MORE</a>
                    </div>
                    </div>
                </section>
            </article>
        </div>

    </div>
</div>
<br>

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
