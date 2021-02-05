@extends('layouts.app')
@section('title')
Cart
@endsection
@section('content')

<div class="top_panel_title top_panel_style_3 title_present breadcrumbs_present scheme_original">
    <div class="top_panel_title_inner top_panel_inner_style_3 shop_page_breadcrumbs_bg">
        <div class="content_wrap">
            <h1 class="page_title">Your cart</h1>
            <div class="breadcrumbs">
                <a class="breadcrumbs_item home" href="{{url('/')}}">Home</a>
                <span class="breadcrumbs_delimiter"></span>
                <a class="breadcrumbs_item all" href="{{route('store')}}">Store</a>
                <span class="breadcrumbs_delimiter"></span>
                <span class="breadcrumbs_item current">Your cart</span>
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
                        <form action="#" method="post">
                            <table class="shop_table shop_table_responsive cart" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th class="product-remove">&nbsp;</th>
                                        <th class="product-thumbnail">&nbsp;</th>
                                        <th class="product-name">Product</th>
                                        <th class="product-price">Price</th>
                                        <th class="product-quantity">Quantity</th>
                                        <th class="product-subtotal">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Cart Item -->
                                    <tr class="cart_item">
                                        <td class="product-remove">
                                            <a href="#" class="remove" title="Remove this item">&times;</a>
                                        </td>
                                        <td class="product-thumbnail">
                                            <a href="product-single.html">
                                                <img src="images/god-is-love-tshirt-180x180.jpg" alt="god-is-love-tshirt" />
                                            </a>
                                        </td>
                                        <td class="product-name" data-title="Product">
                                            <a href="product-single.html/index.html">'God is Love' T-shirt</a>
                                        </td>
                                        <td class="product-price" data-title="Price">
                                            <span class="woocommerce-Price-amount amount">
                                                <span class="woocommerce-Price-currencySymbol">&pound;</span>9.99
                                            </span>
                                        </td>
                                        <td class="product-quantity" data-title="Quantity">
                                            <div class="quantity">
                                                <input type="number" step="1" min="0" max="" name="cart[9afefc52942cb83c7c1f14b2139b09ba][qty]" value="1" title="Qty" class="input-text qty text" size="4" pattern="[0-9]*" />
                                            </div>
                                        </td>
                                        <td class="product-subtotal" data-title="Total">
                                            <span class="woocommerce-Price-amount amount">
                                                <span class="woocommerce-Price-currencySymbol">&pound;</span>9.99
                                            </span>
                                        </td>
                                    </tr>
                                    <!-- /Cart Item -->
                                    <!-- Cart Item -->
                                    <tr class="cart_item">
                                        <td class="product-remove">
                                            <a href="#" class="remove" title="Remove this item">&times;</a>
                                        </td>
                                        <td class="product-thumbnail">
                                            <a href="product-single.html">
                                                <img src="images/album-this-is-living-180x180.jpg" alt="album-this-is-living" />
                                            </a>
                                        </td>
                                        <td class="product-name" data-title="Product">
                                            <a href="product-single.html">Album "This is Living"</a>
                                        </td>
                                        <td class="product-price" data-title="Price">
                                            <span class="woocommerce-Price-amount amount">
                                                <span class="woocommerce-Price-currencySymbol">&pound;</span>9.99
                                            </span>
                                        </td>
                                        <td class="product-quantity" data-title="Quantity">
                                            <div class="quantity">
                                                <input type="number" step="1" min="0" max="" name="cart[b8c27b7a1c450ffdacb31483454e0b54][qty]" value="1" title="Qty" class="input-text qty text" size="4" pattern="[0-9]*" />
                                            </div>
                                        </td>
                                        <td class="product-subtotal" data-title="Total">
                                            <span class="woocommerce-Price-amount amount">
                                                <span class="woocommerce-Price-currencySymbol">&pound;</span>9.99
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="6" class="actions">
                                            <div class="coupon">
                                                <label for="coupon_code">Coupon:</label>
                                                <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="Coupon code" />
                                                <input type="submit" class="button" name="apply_coupon" value="Apply Coupon" />
                                            </div>
                                            <input type="submit" class="button" name="update_cart" value="Update Cart" />
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                        <div class="cart-collaterals">
                            <div class="cart_totals ">
                                <h2>Cart Totals</h2>
                                <table cellspacing="0" class="shop_table shop_table_responsive">
                                    <tr class="cart-subtotal">
                                        <th>Subtotal</th>
                                        <td data-title="Subtotal">
                                            <span class="woocommerce-Price-amount amount">
                                                <span class="woocommerce-Price-currencySymbol">&pound;</span>19.98
                                            </span>
                                        </td>
                                    </tr>
                                    <tr class="order-total">
                                        <th>Total</th>
                                        <td data-title="Total">
                                            <strong>
                                                <span class="woocommerce-Price-amount amount">
                                                    <span class="woocommerce-Price-currencySymbol">&pound;</span>19.98
                                                </span>
                                            </strong>
                                        </td>
                                    </tr>
                                </table>
                                <div class="wc-proceed-to-checkout">
                                    <a href="{{route('checkout')}}" class="checkout-button button alt wc-forward">
                                        Proceed to Checkout
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </article>
        </div>
        <!-- /Content -->
    </div>
</div>
@endsection
