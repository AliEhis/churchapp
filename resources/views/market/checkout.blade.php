@extends('layouts.app')
@section('title')
Checkout
@endsection
@section('content')
<div class="top_panel_title top_panel_style_3  title_present breadcrumbs_present scheme_original">
    <div class="top_panel_title_inner top_panel_inner_style_3 breadcrumbs_block_bg3">
        <div class="content_wrap">
            <h1 class="page_title">Checkout</h1>
            <div class="breadcrumbs">
                <a class="breadcrumbs_item home" href="index.html">Home</a>
                <span class="breadcrumbs_delimiter"></span>
                <a class="breadcrumbs_item all" href="shop.html/index.html">Shop</a>
                <span class="breadcrumbs_delimiter"></span>
                <span class="breadcrumbs_item current">Checkout</span>
            </div>
        </div>
    </div>
</div>
<!-- /Breadcrumbs -->
<!-- Page Content Wrap -->
<div class="page_content_wrap page_paddings_yes">
    <div class="content_wrap">
        <!-- Content -->
        <div class="content">
            <article class="post_item post_item_single page">
                <section class="post_content">
                    <div class="woocommerce">
                        <div class="woocommerce-info">Returning customer?
                            <a href="#" class="showlogin">Click here to login</a>
                        </div>
                        <div class="woocommerce-info">Have a coupon?
                            <a href="#" class="showcoupon">Click here to enter your code</a>
                        </div>
                        <form name="checkout" method="post" class="checkout woocommerce-checkout" action="#">
                            <div class="col2-set" id="customer_details">
                                <div class="col-1">
                                    <div class="woocommerce-billing-fields">
                                        <h3>Billing Details</h3>
                                        <p class="form-row form-row form-row-first validate-required" id="billing_first_name_field">
                                            <label for="billing_first_name" class="">First Name
                                                <abbr class="required" title="required">*</abbr>
                                            </label>
                                            <input type="text" class="input-text " name="billing_first_name" id="billing_first_name" placeholder=""  value="" />
                                        </p>
                                        <p class="form-row form-row form-row-last validate-required" id="billing_last_name_field">
                                            <label for="billing_last_name" class="">Last Name
                                                <abbr class="required" title="required">*</abbr>
                                            </label>
                                            <input type="text" class="input-text " name="billing_last_name" id="billing_last_name" placeholder="" value="" />
                                        </p>
                                        <div class="clear"></div>
                                        <p class="form-row form-row form-row-wide" id="billing_company_field">
                                            <label for="billing_company" class="">Company Name</label>
                                            <input type="text" class="input-text " name="billing_company" id="billing_company" placeholder="" value="" />
                                        </p>
                                        <p class="form-row form-row form-row-first validate-required validate-email" id="billing_email_field">
                                            <label for="billing_email" class="">Email Address
                                                <abbr class="required" title="required">*</abbr>
                                            </label>
                                            <input type="email" class="input-text " name="billing_email" id="billing_email" placeholder="" value="" />
                                        </p>
                                        <p class="form-row form-row form-row-last validate-required validate-phone" id="billing_phone_field">
                                            <label for="billing_phone" class="">Phone <abbr class="required" title="required">*</abbr></label>
                                            <input type="tel" class="input-text" name="billing_phone" id="billing_phone" placeholder="" value="" />
                                        </p>
                                        <div class="clear"></div>
                                        <p class="form-row form-row form-row-wide address-field update_totals_on_change validate-required" id="billing_country_field">
                                            <label for="billing_country" class="">Country
                                                <abbr class="required" title="required">*</abbr>
                                            </label>
                                            <select name="billing_country" id="billing_country" class="country_to_state country_select ">
                                                <option value="">Select a country&hellip;</option>
                                                <option value="AX">&#197;land Islands</option>
                                                <option value="AF">Afghanistan</option>
                                                <option value="AL">Albania</option>
                                                <option value="DZ">Algeria</option>
                                                <option value="AS">American Samoa</option>
                                                <option value="AD">Andorra</option>
                                                <option value="AO">Angola</option>
                                                <option value="AI">Anguilla</option>
                                                <option value="AQ">Antarctica</option>
                                                <option value="AG">Antigua and Barbuda</option>
                                                <option value="AR">Argentina</option>
                                                <option value="AM">Armenia</option>
                                                <option value="AW">Aruba</option>
                                                <option value="AU">Australia</option>
                                                <option value="AT">Austria</option>
                                                <option value="AZ">Azerbaijan</option>
                                                <option value="BS">Bahamas</option>
                                                <option value="BH">Bahrain</option>
                                                <option value="BD">Bangladesh</option>
                                                <option value="BB">Barbados</option>
                                                <option value="BY">Belarus</option>
                                                <option value="PW">Belau</option>
                                                <option value="BE">Belgium</option>
                                                <option value="BZ">Belize</option>
                                                <option value="BJ">Benin</option>
                                                <option value="BM">Bermuda</option>
                                                <option value="BT">Bhutan</option>
                                                <option value="BO">Bolivia</option>
                                                <option value="BQ">Bonaire, Saint Eustatius and Saba</option>
                                                <option value="BA">Bosnia and Herzegovina</option>
                                                <option value="BW">Botswana</option>
                                                <option value="BV">Bouvet Island</option>
                                                <option value="BR">Brazil</option>
                                                <option value="IO">British Indian Ocean Territory</option>
                                                <option value="VG">British Virgin Islands</option>
                                                <option value="BN">Brunei</option>
                                                <option value="BG">Bulgaria</option>
                                                <option value="BF">Burkina Faso</option>
                                                <option value="BI">Burundi</option>
                                                <option value="KH">Cambodia</option>
                                                <option value="CM">Cameroon</option>
                                                <option value="CA">Canada</option>
                                                <option value="CV">Cape Verde</option>
                                                <option value="KY">Cayman Islands</option>
                                                <option value="CF">Central African Republic</option>
                                                <option value="TD">Chad</option>
                                                <option value="CL">Chile</option>
                                                <option value="CN">China</option>
                                                <option value="CX">Christmas Island</option>
                                                <option value="CC">Cocos (Keeling) Islands</option>
                                                <option value="CO">Colombia</option>
                                                <option value="KM">Comoros</option>
                                                <option value="CG">Congo (Brazzaville)</option>
                                                <option value="CD">Congo (Kinshasa)</option>
                                                <option value="CK">Cook Islands</option>
                                                <option value="CR">Costa Rica</option>
                                                <option value="HR">Croatia</option>
                                                <option value="CU">Cuba</option>
                                                <option value="CW">Cura&ccedil;ao</option>
                                                <option value="CY">Cyprus</option>
                                                <option value="CZ">Czech Republic</option>
                                                <option value="DK">Denmark</option>
                                                <option value="DJ">Djibouti</option>
                                                <option value="DM">Dominica</option>
                                                <option value="DO">Dominican Republic</option>
                                                <option value="EC">Ecuador</option>
                                                <option value="EG">Egypt</option>
                                                <option value="SV">El Salvador</option>
                                                <option value="GQ">Equatorial Guinea</option>
                                                <option value="ER">Eritrea</option>
                                                <option value="EE">Estonia</option>
                                                <option value="ET">Ethiopia</option>
                                                <option value="FK">Falkland Islands</option>
                                                <option value="FO">Faroe Islands</option>
                                                <option value="FJ">Fiji</option>
                                                <option value="FI">Finland</option>
                                                <option value="FR">France</option>
                                                <option value="GF">French Guiana</option>
                                                <option value="PF">French Polynesia</option>
                                                <option value="TF">French Southern Territories</option>
                                                <option value="GA">Gabon</option>
                                                <option value="GM">Gambia</option>
                                                <option value="GE">Georgia</option>
                                                <option value="DE">Germany</option>
                                                <option value="GH">Ghana</option>
                                                <option value="GI">Gibraltar</option>
                                                <option value="GR">Greece</option>
                                                <option value="GL">Greenland</option>
                                                <option value="GD">Grenada</option>
                                                <option value="GP">Guadeloupe</option>
                                                <option value="GU">Guam</option>
                                                <option value="GT">Guatemala</option>
                                                <option value="GG">Guernsey</option>
                                                <option value="GN">Guinea</option>
                                                <option value="GW">Guinea-Bissau</option>
                                                <option value="GY">Guyana</option>
                                                <option value="HT">Haiti</option>
                                                <option value="HM">Heard Island and McDonald Islands</option>
                                                <option value="HN">Honduras</option>
                                                <option value="HK">Hong Kong</option>
                                                <option value="HU">Hungary</option>
                                                <option value="IS">Iceland</option>
                                                <option value="IN">India</option>
                                                <option value="ID">Indonesia</option>
                                                <option value="IR">Iran</option>
                                                <option value="IQ">Iraq</option>
                                                <option value="IM">Isle of Man</option>
                                                <option value="IL">Israel</option>
                                                <option value="IT">Italy</option>
                                                <option value="CI">Ivory Coast</option>
                                                <option value="JM">Jamaica</option>
                                                <option value="JP">Japan</option>
                                                <option value="JE">Jersey</option>
                                                <option value="JO">Jordan</option>
                                                <option value="KZ">Kazakhstan</option>
                                                <option value="KE">Kenya</option>
                                                <option value="KI">Kiribati</option>
                                                <option value="KW">Kuwait</option>
                                                <option value="KG">Kyrgyzstan</option>
                                                <option value="LA">Laos</option>
                                                <option value="LV">Latvia</option>
                                                <option value="LB">Lebanon</option>
                                                <option value="LS">Lesotho</option>
                                                <option value="LR">Liberia</option>
                                                <option value="LY">Libya</option>
                                                <option value="LI">Liechtenstein</option>
                                                <option value="LT">Lithuania</option>
                                                <option value="LU">Luxembourg</option>
                                                <option value="MO">Macao S.A.R., China</option>
                                                <option value="MK">Macedonia</option>
                                                <option value="MG">Madagascar</option>
                                                <option value="MW">Malawi</option>
                                                <option value="MY">Malaysia</option>
                                                <option value="MV">Maldives</option>
                                                <option value="ML">Mali</option>
                                                <option value="MT">Malta</option>
                                                <option value="MH">Marshall Islands</option>
                                                <option value="MQ">Martinique</option>
                                                <option value="MR">Mauritania</option>
                                                <option value="MU">Mauritius</option>
                                                <option value="YT">Mayotte</option>
                                                <option value="MX">Mexico</option>
                                                <option value="FM">Micronesia</option>
                                                <option value="MD">Moldova</option>
                                                <option value="MC">Monaco</option>
                                                <option value="MN">Mongolia</option>
                                                <option value="ME">Montenegro</option>
                                                <option value="MS">Montserrat</option>
                                                <option value="MA">Morocco</option>
                                                <option value="MZ">Mozambique</option>
                                                <option value="MM">Myanmar</option>
                                                <option value="NA">Namibia</option>
                                                <option value="NR">Nauru</option>
                                                <option value="NP">Nepal</option>
                                                <option value="NL">Netherlands</option>
                                                <option value="NC">New Caledonia</option>
                                                <option value="NZ">New Zealand</option>
                                                <option value="NI">Nicaragua</option>
                                                <option value="NE">Niger</option>
                                                <option value="NG">Nigeria</option>
                                                <option value="NU">Niue</option>
                                                <option value="NF">Norfolk Island</option>
                                                <option value="KP">North Korea</option>
                                                <option value="MP">Northern Mariana Islands</option>
                                                <option value="NO">Norway</option>
                                                <option value="OM">Oman</option>
                                                <option value="PK">Pakistan</option>
                                                <option value="PS">Palestinian Territory</option>
                                                <option value="PA">Panama</option>
                                                <option value="PG">Papua New Guinea</option>
                                                <option value="PY">Paraguay</option>
                                                <option value="PE">Peru</option>
                                                <option value="PH">Philippines</option>
                                                <option value="PN">Pitcairn</option>
                                                <option value="PL">Poland</option>
                                                <option value="PT">Portugal</option>
                                                <option value="PR">Puerto Rico</option>
                                                <option value="QA">Qatar</option>
                                                <option value="IE">Republic of Ireland</option>
                                                <option value="RE">Reunion</option>
                                                <option value="RO">Romania</option>
                                                <option value="RU">Russia</option>
                                                <option value="RW">Rwanda</option>
                                                <option value="ST">S&atilde;o Tom&eacute; and Pr&iacute;ncipe</option>
                                                <option value="BL">Saint Barth&eacute;lemy</option>
                                                <option value="SH">Saint Helena</option>
                                                <option value="KN">Saint Kitts and Nevis</option>
                                                <option value="LC">Saint Lucia</option>
                                                <option value="SX">Saint Martin (Dutch part)</option>
                                                <option value="MF">Saint Martin (French part)</option>
                                                <option value="PM">Saint Pierre and Miquelon</option>
                                                <option value="VC">Saint Vincent and the Grenadines</option>
                                                <option value="WS">Samoa</option>
                                                <option value="SM">San Marino</option>
                                                <option value="SA">Saudi Arabia</option>
                                                <option value="SN">Senegal</option>
                                                <option value="RS">Serbia</option>
                                                <option value="SC">Seychelles</option>
                                                <option value="SL">Sierra Leone</option>
                                                <option value="SG">Singapore</option>
                                                <option value="SK">Slovakia</option>
                                                <option value="SI">Slovenia</option>
                                                <option value="SB">Solomon Islands</option>
                                                <option value="SO">Somalia</option>
                                                <option value="ZA">South Africa</option>
                                                <option value="GS">South Georgia/Sandwich Islands</option>
                                                <option value="KR">South Korea</option>
                                                <option value="SS">South Sudan</option>
                                                <option value="ES">Spain</option>
                                                <option value="LK">Sri Lanka</option>
                                                <option value="SD">Sudan</option>
                                                <option value="SR">Suriname</option>
                                                <option value="SJ">Svalbard and Jan Mayen</option>
                                                <option value="SZ">Swaziland</option>
                                                <option value="SE">Sweden</option>
                                                <option value="CH">Switzerland</option>
                                                <option value="SY">Syria</option>
                                                <option value="TW">Taiwan</option>
                                                <option value="TJ">Tajikistan</option>
                                                <option value="TZ">Tanzania</option>
                                                <option value="TH">Thailand</option>
                                                <option value="TL">Timor-Leste</option>
                                                <option value="TG">Togo</option>
                                                <option value="TK">Tokelau</option>
                                                <option value="TO">Tonga</option>
                                                <option value="TT">Trinidad and Tobago</option>
                                                <option value="TN">Tunisia</option>
                                                <option value="TR">Turkey</option>
                                                <option value="TM">Turkmenistan</option>
                                                <option value="TC">Turks and Caicos Islands</option>
                                                <option value="TV">Tuvalu</option>
                                                <option value="UG">Uganda</option>
                                                <option value="UA">Ukraine</option>
                                                <option value="AE">United Arab Emirates</option>
                                                <option value="GB" selected='selected'>United Kingdom (UK)</option>
                                                <option value="US">United States (US)</option>
                                                <option value="UM">United States (US) Minor Outlying Islands</option>
                                                <option value="VI">United States (US) Virgin Islands</option>
                                                <option value="UY">Uruguay</option>
                                                <option value="UZ">Uzbekistan</option>
                                                <option value="VU">Vanuatu</option>
                                                <option value="VA">Vatican</option>
                                                <option value="VE">Venezuela</option>
                                                <option value="VN">Vietnam</option>
                                                <option value="WF">Wallis and Futuna</option>
                                                <option value="EH">Western Sahara</option>
                                                <option value="YE">Yemen</option>
                                                <option value="ZM">Zambia</option>
                                                <option value="ZW">Zimbabwe</option>
                                            </select>
                                        </p>
                                        <p class="form-row form-row form-row-wide address-field validate-required" id="billing_address_1_field">
                                            <label for="billing_address_1" class="">Address
                                                <abbr class="required" title="required">*</abbr>
                                            </label>
                                            <input type="text" class="input-text " name="billing_address_1" id="billing_address_1" placeholder="Street address" value="" />
                                        </p>
                                        <p class="form-row form-row form-row-wide address-field" id="billing_address_2_field">
                                            <input type="text" class="input-text " name="billing_address_2" id="billing_address_2" placeholder="Apartment, suite, unit etc. (optional)" value="" />
                                        </p>
                                        <p class="form-row form-row form-row-wide address-field validate-required" id="billing_city_field">
                                            <label for="billing_city" class="">Town / City
                                                <abbr class="required" title="required">*</abbr>
                                            </label>
                                            <input type="text" class="input-text " name="billing_city" id="billing_city" placeholder="" value="" />
                                        </p>
                                        <p class="form-row form-row form-row-first address-field validate-state" id="billing_state_field">
                                            <label for="billing_state" class="">County</label>
                                            <input type="text" class="input-text " value="" placeholder="" name="billing_state" id="billing_state" />
                                        </p>

                                        <p class="form-row form-row form-row-last address-field validate-required validate-postcode" id="billing_postcode_field">
                                            <label for="billing_postcode" class="">Postcode
                                                <abbr class="required" title="required">*</abbr>
                                            </label>
                                            <input type="text" class="input-text " name="billing_postcode" id="billing_postcode" placeholder="" value="" />
                                        </p>
                                        <div class="clear"></div>
                                        <p class="form-row form-row-wide create-account">
                                            <input class="input-checkbox" id="createaccount" type="checkbox" name="createaccount" value="1" />
                                            <label for="createaccount" class="checkbox">Create an account?</label>
                                        </p>
                                        <div class="create-account">
                                            <p>Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
                                            <p class="form-row form-row validate-required" id="account_password_field">
                                                <label for="account_password" class="">Account password
                                                    <abbr class="required" title="required">*</abbr>
                                                </label>
                                                <input type="password" class="input-text " name="account_password" id="account_password" placeholder="Password" value="" />
                                            </p>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="woocommerce-shipping-fields">
                                        <h3>Additional Information</h3>
                                        <p class="form-row form-row notes" id="order_comments_field">
                                            <label for="order_comments" class="">Order Notes</label>
                                            <textarea name="order_comments" class="input-text " id="order_comments" placeholder="Notes about your order, e.g. special notes for delivery." rows="2" cols="5"></textarea>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <h3 id="order_review_heading">Your order</h3>
                            <div id="order_review" class="woocommerce-checkout-review-order">
                                <table class="shop_table woocommerce-checkout-review-order-table">
                                    <thead>
                                        <tr>
                                            <th class="product-name">Product</th>
                                            <th class="product-total">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="cart_item">
                                            <td class="product-name">
                                                'God is Love' T-shirt&nbsp; <strong class="product-quantity">&times; 1</strong>
                                            </td>
                                            <td class="product-total">
                                                <span class="woocommerce-Price-amount amount">
                                                    <span class="woocommerce-Price-currencySymbol">&pound;</span>
                                                    9.99
                                                </span>
                                            </td>
                                        </tr>
                                        <tr class="cart_item">
                                            <td class="product-name">
                                                Album "This is Living"&nbsp;
                                                <strong class="product-quantity">&times; 1</strong>
                                            </td>
                                            <td class="product-total">
                                                <span class="woocommerce-Price-amount amount">
                                                    <span class="woocommerce-Price-currencySymbol">&pound;</span>9.99
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr class="cart-subtotal">
                                            <th>Subtotal</th>
                                            <td>
                                                <span class="woocommerce-Price-amount amount">
                                                    <span class="woocommerce-Price-currencySymbol">&pound;</span>19.98
                                                </span>
                                            </td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>Total</th>
                                            <td>
                                                <strong>
                                                    <span class="woocommerce-Price-amount amount">
                                                        <span class="woocommerce-Price-currencySymbol">&pound;</span>19.98
                                                    </span>
                                                </strong>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                                <div id="payment" class="woocommerce-checkout-payment">
                                    <ul class="wc_payment_methods payment_methods methods">
                                        <li class="wc_payment_method payment_method_cheque">
                                            <input id="payment_method_cheque" type="radio" class="input-radio" name="payment_method" value="cheque" checked='checked' data-order_button_text="" />
                                            <label for="payment_method_cheque">
                                                Check Payments </label>
                                            <div class="payment_box payment_method_cheque">
                                                <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                            </div>
                                        </li>
                                        <li class="wc_payment_method payment_method_paypal">
                                            <input id="payment_method_paypal" type="radio" class="input-radio" name="payment_method" value="paypal" data-order_button_text="Proceed to PayPal" />
                                            <label for="payment_method_paypal">
                                                PayPal <img src="../www.paypalobjects.com/webstatic/mktg/Logo/AM_mc_vs_ms_ae_UK.png" alt="PayPal Acceptance Mark" />
                                                <a href="https://www.paypal.com/gb/webapps/mpp/paypal-popup" class="about_paypal" title="What is PayPal?">What is PayPal?</a>
                                            </label>
                                         </li>
                                    </ul>
                                    <div class="form-row place-order">
                                        <input type="submit" class="button alt" name="woocommerce_checkout_place_order" id="place_order" value="Place order" data-value="Place order" />
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
            </article>
        </div>
        <!-- /Content -->
    </div>
 </div>


@endsection
