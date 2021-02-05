@extends('layouts.app')
@section('title')
Contact Us
@endsection
@section('content')
<div class="top_panel_title top_panel_style_3 title_present breadcrumbs_present scheme_original">
    <div class="top_panel_title_inner top_panel_inner_style_3 breadcrumbs_block_bg1">
        <div class="content_wrap">
            <h1 class="page_title">Contact Us</h1>
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

                    <figure class="sc_image alignleft sc_image_shape_square width_280 height_158">
                        <img src="img/group-leaders-meeting-300x200.jpg" alt="" />
                    </figure>
                    <h3 style="color: black">We Want To Hear From You</h3>
                    <p>Proin dignissim commodo magna at luctus. Nam molestie justo augue, nec eleifend urna laoreet non. Proin ut nulla egestas, hendrerit urna scelerisque, finibus nulla. Integer et elementum sem.</p>
                    <a href="#" class="sc_button sc_button_square sc_button_style_border sc_button_color_style_2 sc_button_size_large">VISIT US</a>
                    <br>
                    <div class="sc_line sc_line_position_center_center sc_line_style_solid"></div>
                    <figure class="sc_image alignright sc_image_shape_square width_280 height_158">
                        <a href="#">
                            <img src="images/image-left-280x158.html" alt="" />
                        </a>
                    </figure>
                    <h3 style="color: black">Email Us</h3>
                    <p>Mauris vitae quam ligula. In tincidunt sapien sed nibh scelerisque congue. Maecenas ut libero eu metus tincidunt lobortis. Duis accumsan at mauris vel lacinia.</p>
                    <div class="sc_form_fields column-2_3">
                        <form id="sc_form_1_form" data-formtype="form_2" method="post" action="{{route('site.contact.post')}}">
                            {{csrf_field()}}
                            <div class="sc_form_info">
                                <div id="sc_form_1_typography" class="sc_form sc_form_style_form_custom">
                                    <form id="sc_form_1_typography_form" data-formtype="form_custom" method="post" action="#">
                                        <div class="sc_form_item sc_form_item_text sc_form_field label_top">
                                            <label for="sc_form_typography_1_1" style="color: black">First Name</label>
                                            <input type="text" id="sc_form_typography_1_1" name="first_name" placeholder="Enter First Name">
                                        </div>
                                        <div class="result sc_infobox"></div>
                                    </form>
                                </div>
                                <div id="sc_form_1_typography" class="sc_form sc_form_style_form_custom">
                                    <form id="sc_form_1_typography_form" data-formtype="form_custom" method="post" action="#">
                                        <div class="sc_form_item sc_form_item_text sc_form_field label_top">
                                            <label for="sc_form_typography_1_1" style="color: black">Last Name</label>
                                            <input type="text" id="sc_form_typography_1_1" name="last_name" placeholder="Enter Last Name">
                                        </div>
                                        <div class="result sc_infobox"></div>
                                    </form>
                                </div>
                                <div id="sc_form_1_typography" class="sc_form sc_form_style_form_custom">
                                    <form id="sc_form_1_typography_form" data-formtype="form_custom" method="post" action="#">
                                        <div class="sc_form_item sc_form_item_text sc_form_field label_top">
                                            <label for="sc_form_typography_1_1" style="color: black">Email Address</label>
                                            <input type="email" id="sc_form_typography_1_1" name="email" placeholder="Enter Email Address">
                                        </div>
                                        <div class="result sc_infobox"></div>
                                    </form>
                                </div>
                                <div class="sc_form_item sc_form_item_select sc_form_field label_top">
                                    <label for="sc_form_typography_1_1" style="color: black">Donation Type</label>
                                    <div class="sc_form_select_container">
                                        <select id="sc_form_2_1" name="sc_form_2_1">
                                            <option value="big">Prayer Request</option>
                                            <option value="middle">Pastoral Care</option>
                                            <option value="small">Missions</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="sc_form_item sc_form_message label_over">
                                <label class="required" for="sc_form_message">Message</label>
                                <textarea id="sc_form_message" name="message" placeholder="Enter Question/Comment" cols="110"></textarea>
                            </div>
                            <br>
                            <div class="sc_form_item sc_form_button">
                                <input type="submit" value="SUBMIT" class="sc_button sc_button_square sc_button_style_filled sc_button_color_style_3 "/>
                            </div>
                            <div class="result sc_infobox"></div>
                        </form>
                    </div>
                    <!-- /Image alignment -->
                </section>
            </article>
        </div>

    </div>
</div>

@endsection
