@extends('layouts.app')
@section('title')
New Here
@endsection
@section('content')

<div class="top_panel_title top_panel_style_3 title_present breadcrumbs_present scheme_original">
    <div class="top_panel_title_inner top_panel_inner_style_3 breadcrumbs_block_bg1">
        <div class="content_wrap">
            <h1 class="page_title">Welcome to our Church</h1>
        </div>
    </div>
</div>

<div class="page_content_wrap page_paddings_yes">
    <div class="content_wrap">
        <!-- Content -->
        <div class="content">
            <article class="post_item post_item_single page">
                <section class="post_content">
                    <div class="woocommerce">
                        <form method="post" action="{{ route('new.here.post') }}" class="checkout woocommerce-checkout">
                            {{csrf_field()}}
                            <div class="col2-set" id="customer_details ">
                                <div class="col-1">
                                    <div class="woocommerce-billing-fields">
                                        <h3 class="sc_title sc_title_regular sc_align_center" style="color: black">FILL THE FORM BELOW</h3>

                                        <p class="form-row form-row form-row-wide address-field validate-required" id="billing_address_1_field">
                                            <label for="billing_address_1" class="">Full Name
                                                <abbr class="required" title="required">*</abbr>
                                            </label>
                                            <input type="text" class="input-text " name="name" id="billing_address_1" placeholder="Street address" value="" />
                                        </p>
                                        <p class="form-row form-row form-row-wide address-field validate-required" id="billing_address_1_field">
                                            <label for="billing_address_1" class="">Email
                                                <abbr class="required" title="required">*</abbr>
                                            </label>
                                            <input type="email" class="input-text " name="email" id="billing_address_1" placeholder="Enter Email Address" value="" />
                                        </p>
                                        <p class="form-row form-row form-row-wide address-field validate-required" id="billing_address_1_field">
                                            <label for="billing_address_1" class="">Contact Number
                                                <abbr class="required" title="required">*</abbr>
                                            </label>
                                            <input type="number" class="input-text " name="phone" id="billing_address_1" placeholder="Enter Contact Number" value="" />
                                        </p>
                                        <p class="form-row form-row form-row-wide address-field validate-required" id="billing_address_1_field">
                                            <label for="billing_address_1" class="">Address
                                                <abbr class="required" title="required">*</abbr>
                                            </label>
                                            <input type="text" class="input-text " name="address" id="billing_address_1" placeholder="Street address" value="" />
                                        </p>
                                        <div class="form-group">
                                            <label for="exampleInputText1">Have you visited our church before?</label>
                                            <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input" name="church_visit" id="yes" value="yes">
                                                        Yes
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input" name="church_visit" id="yes" value="no">
                                                        No
                                                    </label>
                                                </div>
                                        </div>
                                        <p class="form-row form-row form-row-wide address-field validate-required" id="billing_city_field">
                                            <label for="billing_city" class="">How did you hear about us?
                                                <abbr class="required" title="required">*</abbr>
                                            </label>
                                            <input type="text" class="input-text " name="hear_about_us" id="billing_city" placeholder="Enter Your Answer" value="" />
                                        </p>
                                        <p class="form-row form-row form-row-wide address-field validate-required" id="billing_city_field">
                                            <label for="billing_city" class="">Anything you would like us to pray with you about?
                                                <abbr class="required" title="required">*</abbr>
                                            </label>
                                            <input type="text" class="input-text " name="prayer_point" id="billing_city" placeholder="Enter Your Answer" value="" />
                                        </p>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                                <input type="submit" value="SUBMIT" class="sc_button sc_button_square sc_button_style_filled sc_button_color_style_3 "/>
                        </form>
                    </div>
                </section>
            </article>
        </div>
        <!-- /Content -->
    </div>
 </div>
 <div class="hp1_testimonials_section">
    <div class="content_wrap">
        <div class="sc_section column-7_10">
            <div class="sc_section_inner">
                <div class="sc_section alignright">
                    <div class="sc_section_inner">
                        <h1 class="donation_title_custom"><u>This Week At Our Church</u></h1>
                        <h2 class="sc_title sc_title_cursive sc_align_right">{{$upcomingevent->minister}}</h2>
                        <h3 class="text-center">{{$upcomingevent->day}} at {{ date('h:ia', strtotime($upcomingevent->time)) }} & {{ date('h:ia', strtotime($upcomingevent->time2)) }}</h3>
                        <a href="{{route('newhere')}}" class="sc_button sc_button_square sc_button_style_border sc_button_color_style_2 sc_button_size_large">Speaking Schedule</a>
                        <a href="{{route('newhere')}}" class="sc_button sc_button_square sc_button_style_border sc_button_color_style_2 sc_button_size_large">Experience Church</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="hp1_join_us_section accent1_bgc">
    <div class="content_wrap">
        <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_4 column_resizer">
            <div class="column-2_4 sc_column_item sc_column_item_1 odd first span_2">
                <h2 class="hp1_join_us_info custom_heading_1"><a href="{{route('servicetime')}}"> Service Times</a></h2>
            </div><div class="column-1_4 sc_column_item sc_column_item_3 odd after_span_2">
                <div class="sc_section join_us_custom_block_1">
                </div>
            </div><div class="column-1_4 sc_column_item sc_column_item_4 even text_align_center margin_top_0_5em">
                <h2 class="hp1_join_us_info custom_heading_1"><a href="{{route('servicetime')}}" style="color: #fca44a"> See Full Schedule ></a></h2>
            </div>
        </div>
        <hr>

            <h2 class="hp1_join_us_info custom_heading_1" style="float: left"><a href="{{route('servicetime')}}"> {{$upcomingevent->day}} at {{ date('h:ia', strtotime($upcomingevent->time)) }} & {{ date('h:ia', strtotime($upcomingevent->time2)) }}</a></h2>


            <h2 class="hp1_join_us_info custom_heading_1"><a href="{{route('servicetime')}}" style="float: right"> {{$upcomingevent->day}} at {{ date('h:ia', strtotime($upcomingevent->time)) }}</a></h2>

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
                    <h4 style="color: black">We Are Easy To Find</h4>
                    <p>Proin dignissim commodo magna at luctus. Nam molestie justo augue, nec eleifend urna laoreet non. Proin ut nulla egestas, hendrerit urna scelerisque, finibus nulla. Integer et elementum sem.</p>
                    <a href="{{route('newhere')}}" class="sc_button sc_button_square sc_button_style_border sc_button_color_style_2 sc_button_size_large">CLICK FOR DIRECTIONS</a>
                    <br>
                    <div class="sc_line sc_line_position_center_center sc_line_style_solid" style="visibility: hidden"></div>
                    <figure class="sc_image alignright sc_image_shape_square width_280 height_158">
                        <a href="#">
                            <img src="images/image-left-280x158.html" alt="" />
                        </a>
                    </figure>
                    <h4 style="color: black">More Questions?</h4>
                    <p>Mauris vitae quam ligula. In tincidunt sapien sed nibh scelerisque congue. Maecenas ut libero eu metus tincidunt lobortis. Duis accumsan at mauris vel lacinia.</p>
                    <a href="{{route('newhere')}}" class="sc_button sc_button_square sc_button_style_border sc_button_color_style_2 sc_button_size_large">CONTACT US NOW</a>
                    <!-- /Image alignment -->
                    <div class="sc_line sc_line_position_center_center sc_line_style_solid" style="visibility: hidden"></div>



                </section>
            </article>
        </div>

    </div>
</div>

<div class="page_content_wrap page_paddings_no">
    <div class="content_wrap">
        <!-- Content -->
        <div class="content">
            <article class="post_item page">
                <section class="post_content">
                    <!-- Accordion: Style 1 -->
                    <h3 class="sc_title sc_title_regular" style="color: black">Frequently Asked Questions</h3>
                    <div class="sc_accordion sc_accordion_style_1 margin_bottom_large" data-active="0">
                        <div class="sc_accordion_item odd first">
                            <h5 class="sc_accordion_title" style="color: black">
                                <span class="sc_accordion_title_inner">
                                    <span class="sc_accordion_icon_wrap">
                                        <span class="sc_accordion_icon sc_accordion_icon_closed icon-plus"></span>
                                        <span class="sc_accordion_icon sc_accordion_icon_opened icon-minus"></span>
                                    </span>
                                    Accordion Title 1
                                </span>
                            </h5>
                            <div class="sc_accordion_content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            </div>
                        </div>
                        <div class="sc_accordion_item even">
                            <h5 class="sc_accordion_title" style="color: black">
                                <span class="sc_accordion_title_inner">
                                    <span class="sc_accordion_icon_wrap">
                                        <span class="sc_accordion_icon sc_accordion_icon_closed icon-plus"></span>
                                        <span class="sc_accordion_icon sc_accordion_icon_opened icon-minus"></span>
                                    </span>
                                    Accordion Title 2
                                </span>
                            </h5>
                            <div class="sc_accordion_content">
                                <p>Proin dignissim commodo magna at luctus. Nam molestie justo augue, nec eleifend urna laoreet non. Proin ut nulla egestas, hendrerit urna scelerisque, finibus nulla. Integer et elementum sem. Donec nec scelerisque elit, id pulvinar est. Maecenas laoreet, diam vel venenatis molestie, nunc augue tempus felis, nec efficitur dui leo a tellus.</p>
                            </div>
                        </div>
                        <div class="sc_accordion_item odd">
                            <h5 class="sc_accordion_title" style="color: black">
                                <span class="sc_accordion_title_inner">
                                    <span class="sc_accordion_icon_wrap">
                                        <span class="sc_accordion_icon sc_accordion_icon_closed icon-check"></span>
                                        <span class="sc_accordion_icon sc_accordion_icon_opened icon-cancel"></span>
                                    </span>
                                    Accordion Title 3 with custom icons
                                </span>
                            </h5>
                            <div class="sc_accordion_content">
                                <p>Curabitur tristique tempus arcu a placerat. Integer venenatis, magna et lobortis aliquet, diam nibh dictum lorem, ac porttitor dolor nunc quis diam. Morbi malesuada hendrerit libero at fermentum. Praesent risus eros, consectetur eu metus nec, pellentesque dapibus sapien.</p>
                            </div>
                        </div>
                    </div>

                </section>
            </article>
        </div>

    </div>
</div>
@endsection
