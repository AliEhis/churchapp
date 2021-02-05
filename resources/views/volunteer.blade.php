@extends('layouts.app')
@section('title')
Volunteer
@endsection
@section('content')

<div class="top_panel_title top_panel_style_3 title_present breadcrumbs_present scheme_original">
    <div class="top_panel_title_inner top_panel_inner_style_3 breadcrumbs_block_bg1">
        <div class="content_wrap">
            <h1 class="page_title">Join Our Church Workforce</h1>
        </div>
    </div>
</div>
<div class="sc_line sc_line_position_center_center sc_line_style_solid" style="visibility: hidden"></div>
<p  class="sc_title sc_title_regular sc_align_center">We have volunteer opportunites during all of our services. From our service team ministry to kidslife, there is a
    place for everyone to serve.<br>
    Please fill the form below in other for you in other for you to be a member of our Workforce, where you can serve God effectively.<br>

</p>
<div class="page_content_wrap page_paddings_yes ">
    <div class="content_wrap">
        <!-- Content -->
        <div class="content">
            <article class="post_item post_item_single page">
                <section class="post_content">
                    <div class="woocommerce ">
                        <form method="post" action="{{route('volunteer.post')}}" class="checkout woocommerce-checkout">
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
                                            <label for="exampleInputText1">Are you a member of our Church?</label>
                                            <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input" name="member" id="yes" value="yes">
                                                        Yes
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input" name="member" id="yes" value="no">
                                                        No
                                                    </label>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputText1">Are you married?</label>
                                            <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input" name="married" id="yes" value="yes">
                                                        Yes
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input" name="married" id="yes" value="no">
                                                        No
                                                    </label>
                                                </div>
                                        </div>
                                        <p class="form-row form-row form-row-wide address-field validate-required" id="billing_city_field">
                                            <label for="billing_city" class="">Spouse Name
                                                <abbr class="required" title="required">*</abbr>
                                            </label>
                                            <input type="text" class="input-text " name="spouse" id="billing_city" placeholder="Enter Your Answer" value="" />
                                        </p>
                                        <div class="form-group">
                                            <label for="exampleInputText1">Do you have children?</label>
                                            <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input" name="children" id="yes" value="yes">
                                                        Yes
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input" name="children" id="yes" value="no">
                                                        No
                                                    </label>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputText1">How many children?</label>
                                            <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input" name="number_of_children" id="yes" value="1">
                                                        1
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input" name="number_of_children" id="yes" value="2">
                                                        2
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input" name="number_of_children" id="yes" value="3">
                                                        3
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input" name="number_of_children" id="yes" value="4">
                                                        4
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input" name="number_of_children" id="yes" value="5">
                                                        5
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input" name="number_of_children" id="yes" value="6 and more">
                                                        6 and more
                                                    </label>
                                                </div>
                                        </div>
                                        <p class="form-row form-row form-row-wide address-field validate-required" id="billing_address_1_field">
                                            <label for="billing_address_1" class="">Contact Number
                                                <abbr class="required" title="required">*</abbr>
                                            </label>
                                            <input type="text" class="input-text " name="department" id="billing_address_1" placeholder="Name of interested department" value="" />
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

@endsection


