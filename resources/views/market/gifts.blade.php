<!DOCTYPE html>
<html lang="en-US" class="scheme_original">


<!-- Mirrored from newlife-church-html.axiomthemes.com/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Aug 2020 17:14:43 GMT -->
<head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="format-detection" content="telephone=no">

        <title>Gifts | {{$site->site_name}}</title>

   @include('layouts.css')
    </head>

    <body class="archive body_style_wide body_filled article_style_stretch scheme_original top_panel_show top_panel_above sidebar_show sidebar_right woocommerce woocommerce-page">
        <a id="toc_home" class="sc_anchor" title="Home" data-description="<i>Return to Home</i> - <br>navigate to home page of the site" data-icon="icon-home" data-url="index.html" data-separator="yes"></a>
        <a id="toc_top" class="sc_anchor" title="To Top" data-description="<i>Back to top</i> - <br>scroll to top of the page" data-icon="icon-double-up" data-url="" data-separator="yes"></a>
        <!-- Body wrap -->
        <div class="body_wrap">
            <!-- Page wrap -->
            <div class="page_wrap">
                <div class="top_panel_fixed_wrap"></div>
                @include('layouts.main-nav')
                <!-- Breadcrumbs -->
                <div class="top_panel_title top_panel_style_3 title_present breadcrumbs_present scheme_original">
                    <div class="top_panel_title_inner top_panel_inner_style_3 shop_page_breadcrumbs_bg">
                        <div class="content_wrap">
                            <h1 class="page_title">Gifts</h1>
                        </div>
                    </div>
                </div>
                <!-- /Breadcrumbs -->
                <!-- Page Content Wrap -->
                <div class="page_content_wrap page_paddings_no">
                    <div class="content_wrap">
                        <!-- Content -->
                        <div class="content">
                            <div class="list_products shop_mode_thumbs">
                                <p class="woocommerce-result-count">
                                    <a class="button checkout wc-forward" href="{{route('books')}}">BOOKS</a>
                                    <a class="button checkout wc-forward" href="{{route('series')}}">SERIES</a>
                                    <a class="button wc-forward" href="{{route('gifts')}}">GIFTS</a>
                                </p>
                                <!-- Products list -->
                                <ul class="products">
                                    @foreach($gifts as $post)
                                    <!-- Product item -->
                                    <li class="product column-1_3">
                                        <div class="post_item_wrap">
                                            <div class="post_featured">
                                                <div class="post_thumb hover_icon">
                                                    <img src="{{Storage::url('devotion/'.$post->image)}}" alt="" title="god-is-love-tshirt" />
                                                    <a href="{{ route('store.show', [ 'slug' => $post->slug]) }}" class="button add_to_cart_button">Add to cart</a>
                                                </div>
                                            </div>
                                            <h3>
                                                <a href="{{ route('store.show', [ 'slug' => $post->slug]) }}">{{ $post->title}}</a>
                                            </h3>
                                            <span class="price">
                                                <span class="woocommerce-Price-amount amount">
                                                    <h6 style="color: black">{{$post->author}}</h6>
                                                    <span class="woocommerce-Price-currencySymbol">&pound;</span>{{ $post->price}}
                                                </span>
                                            </span>
                                        </div>
                                    </li>
                                    @endforeach

                                    <!-- /Product item -->
                                </ul>
                                <!-- /Products list -->
                                <nav id="pagination" class="pagination_wrap pagination_pages">
                                    {{ $gifts->links() }}
                                </nav>
                            </div>
                        </div>
                        <!-- /Content -->
                        <!-- Sidebar -->
                        <div class="sidebar widget_area scheme_original">
                            <div class="sidebar_inner widget_area_inner">
                                <!-- Widget: Cart -->
                                <aside class="widget woocommerce widget_shopping_cart">
                                    <h5 class="widget_title">Cart</h5>
                                    <div class="widget_shopping_cart_content">
                                        <ul class="cart_list product_list_widget ">
                                            <li class="mini_cart_item">
                                                <a class="remove" href="#" title="Remove this item">×</a>
                                                <a href="donation-single.html">
                                                    <img src="images/god-is-love-tshirt-180x180.jpg" alt="">'God is Love' T-shirt
                                                </a>
                                                <span class="quantity">
                                                    1 ×
                                                     <span class="woocommerce-Price-amount amount">
                                                        <span class="woocommerce-Price-currencySymbol">£</span> 9.99
                                                    </span>
                                                </span>
                                            </li>
                                            <li class="mini_cart_item">
                                                <a class="remove" href="#" title="Remove this item">×</a>
                                                <a href="product-single.html">
                                                    <img src="images/album-this-is-living-180x180.jpg" alt=""> Album "This is Living"
                                                </a>
                                                <span class="quantity">
                                                    1 ×
                                                    <span class="woocommerce-Price-amount amount">
                                                        <span class="woocommerce-Price-currencySymbol">£</span> 9.99
                                                    </span>
                                                </span>
                                            </li>
                                        </ul>
                                        <p class="total">
                                            <strong style="color: #ddd">Subtotal:</strong>
                                            <span class="woocommerce-Price-amount amount" >
                                                <span class="woocommerce-Price-currencySymbol" style="color: #ddd">£ 19.98</span>
                                            </span>
                                        </p>
                                        <p class="buttons">
                                            <a class="button wc-forward" href="{{ route('cart')}}">View Cart</a>
                                            <a class="button checkout wc-forward" href="{{ route('checkout')}}">Checkout</a>                                     </p>
                                    </div>
                                </aside>
                            </div>
                        </div>
                        <!-- /Sidebar -->
                    </div>
                </div>
                <!-- /Page Content Wrap -->
                <!-- Footer -->
                @include('layouts.footer')
                <!-- /Copyright -->
            </div>
            <!-- /Page wrap -->
        </div>
        <!-- /Body wrap -->

        <a href="#" class="scroll_to_top icon-up" title="Scroll to top"></a>

        @include('layouts.js')

    </body>
</html>
