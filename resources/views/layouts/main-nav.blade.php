                <!-- Header -->

                <header class="top_panel_wrap top_panel_style_3 scheme_original">
                    <div class="top_panel_wrap_inner top_panel_inner_style_3 top_panel_position_above">
                        <!-- Menu area -->
                        <div class="top_panel_middle">
                            <div class="content_wrap">
                                <!-- Contact logo -->
                                <div class="contact_logo">
                                    <div class="logo">
                                        <a href="{{url('/')}}">
                                            <img src="{{asset($site->logo)}}" class="logo_main" alt="">
                                            <img src="{{asset($site->logo)}}" class="logo_fixed" alt="">
                                        </a>
                                    </div>
                                </div>
                                <!-- /Contact logo -->
                                <!-- Main Menu -->
                                <div class="menu_main_wrap">
                                    <nav class="menu_main_nav_area">
                                        <ul id="menu_main" class="menu_main_nav">
                                            <!-- Home -->
                                            <li class="menu-item {{ Request::is('/') ? 'current-menu-item' : '' }}">
                                                <a href="{{url('/')}}">Home</a>
                                            </li>

                                            <li class="menu-item {{ Request::is('about-us') || Request::is('more-resources') || Request::is('downloads') ? 'current-menu-item' : '' }}">
                                                <a href="{{route('aboutus')}}">About</a>
                                            </li>
                                            <li class="menu-item {{ Request::is('service-time') ? 'current-menu-item' : '' }}">
                                                <a href="{{route('servicetime')}}">Service Times</a>
                                            </li>
                                            <li class="menu-item {{ Request::is('events') ? 'current-menu-item' : '' }}">
                                                <a href="{{route('events')}}">Events</a>
                                            </li>
                                            <li class="menu-item {{ Request::is('store') ? 'current-menu-item' : '' }}">
                                                <a href="{{route('store')}}">Store</a>
                                            </li>                                            <!-- Blog -->

                                            <li>
                                                <a href="{{route('give')}}" class="sc_button sc_button_square sc_button_style_filled sc_button_color_style_3 sc_button_size_large width_100">
                                                    GIVE
                                                </a>
                                            </li>
                                            <li>
                                                <div class="top_panel_top_search">
                                                    <div class="search_wrap search_style_regular search_state_closed">
                                                        <div class="search_form_wrap">
                                                            <form role="search" method="get" class="search_form" action="#">
                                                                <button type="submit" class="search_submit icon-search" title="Open search"></button>
                                                                <input type="text" class="search_field" placeholder="Search" value="" name="s" />
                                                            </form>
                                                        </div>
                                                        <div class="search_results widget_area scheme_original">
                                                            <a class="search_results_close icon-cancel"></a>
                                                            <div class="search_results_content"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="menu-item {{ Request::is('cart') ? 'current-menu-item' : '' }}" style="float: right"> <a href="{{route('cart')}}"><span class="icon-basket"></span></a></li>

                                            <!-- /Donate -->
                                        </ul>
                                    </nav>

                                </div>
                                <!-- /Main Menu -->
                            </div>
                        </div>
                        <!-- /Menu area -->
                    </div>
                </header>
                <header class="top_panel_wrap top_panel_style_3 scheme_original" style="z-index:50; ">
                    <div class="top_panel_wrap_inner top_panel_inner_style_3 top_panel_position_above">
                        <!-- Menu area -->
                        <div class="top_panel_middle2">
                            <div class="content_wrap">

                                    <nav>
                                        <ul id="menu_main" class="menu_main_nav">
                                            <!-- Home -->
                                            <li class="menu-item {{ Request::is('watch-live') ? 'current-menu-item' : '' }}">
                                                <a href="#">Watch Live</a>
                                            </li>

                                            <li class="menu-item {{ Request::is('sermons') ? 'current-menu-item' : '' }}">
                                                <a href="{{route('sermon')}}">Sermons</a>
                                            </li>
                                            <li class="menu-item {{ Request::is('connect') ? 'current-menu-item' : '' }}">
                                                <a href="{{route('connect')}}">Connect</a>
                                            </li>
                                            <li class="menu-item {{ Request::is('login') ? 'current-menu-item' : '' }}" style="float: right">
                                                <a href="{{route('login')}}">Login</a>
                                            </li>
                                            <li class="menu-item {{ Request::is('register') ? 'current-menu-item' : '' }}" style="float: right">
                                                <a href="{{route('register')}}">Sign Up</a>
                                            </li>
                                        </ul>
                                    </nav>

                                <!-- /Main Menu -->
                            </div>
                        </div>

                        <!-- /Menu area -->
                    </div>
                </header>

                <!-- /Header -->
                <!-- Header Mobile -->
                <div class="header_mobile">
                    <div class="content_wrap">
                        <div class="menu_button icon-menu"></div>
                        <div class="logo">
                            <a href="{{url('/')}}">
                                <img src="{{asset($site->logo)}}" class="logo_main" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="side_wrap">
                        <div class="close">Close</div>
                        <div class="panel_top">
                            <nav class="menu_main_nav_area">
                                <ul id="menu_main_mobile" class="menu_main_nav">
                                    <!-- Home -->

                                    <!-- Blog -->
                                    <li class="menu-item {{ Request::is('/') ? 'current-menu-item' : '' }}">
                                        <a href="{{url('/')}}">Home</a>
                                    </li>

                                    <li class="menu-item {{ Request::is('about-us') || Request::is('more-resources') || Request::is('downloads') ? 'current-menu-item' : '' }}">
                                        <a href="{{route('aboutus')}}">About</a>
                                    </li>
                                    <li class="menu-item {{ Request::is('service-time') ? 'current-menu-item' : '' }}">
                                        <a href="{{route('servicetime')}}">Service Times</a>
                                    </li>
                                    <li class="menu-item {{ Request::is('events') ? 'current-menu-item' : '' }}">
                                        <a href="{{route('events')}}">Events</a>
                                    </li>
                                    <li class="menu-item {{ Request::is('store') ? 'current-menu-item' : '' }}">
                                        <a href="{{route('store')}}">Store</a>
                                    </li>
                                    <li class="donate-btn menu-item">
                                        <a href="{{route('give')}}">Give</a>
                                    </li>
                                    <!-- /Donate -->
                                </ul>
                            </nav>
                            <!-- Search -->
                            <div class="search_wrap search_style_regular search_state_fixed">
                                <div class="search_form_wrap">
                                    <form role="search" method="get" class="search_form" action="#">
                                        <button type="submit" class="search_submit icon-search" title="Start search"></button>
                                        <input type="text" class="search_field" placeholder="Search" value="" name="s" />
                                    </form>
                                </div>
                                <div class="search_results widget_area scheme_original">
                                    <a class="search_results_close icon-cancel"></a>
                                    <div class="search_results_content"></div>
                                </div>
                            </div>
                            <!-- /Search -->
                            <!-- Login -->
                            <div class="login">
                                <a href="#popup_login" class="popup_link popup_login_link icon-user">Login</a>
                            </div>
                            <!-- /Login -->
                        </div>
                        <!-- Socials panel -->
                        <div class="panel_bottom">
                            <div class="contact_socials">
                                <div class="sc_socials sc_socials_type_icons sc_socials_shape_square sc_socials_size_small">
                                    <div class="sc_socials_item">
                                        <a href="#" target="_blank" class="social_icons social_facebook">
                                            <span class="icon-facebook"></span>
                                        </a>
                                    </div>
                                    <div class="sc_socials_item">
                                        <a href="#" target="_blank" class="social_icons social_twitter">
                                            <span class="icon-twitter"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Socials panel -->
                    </div>
                    <div class="mask"></div>
                </div>
                <!-- /Header Mobile -->
