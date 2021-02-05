<footer class="footer_wrap widget_area scheme_original">
    <div class="footer_wrap_inner widget_area_inner">
        <div class="content_wrap">
            <div class="columns_wrap">
                <aside class="column-1_4 widget widget_text">
                    <h5 class="widget_title">Church Address</h5>
                    <div class="textwidget">
                        <p style="color: white">{{$site->site_address}}</p>
                        <p class="textwidget_info">
                            <strong>E: <a href="mailto:{{$site->site_email}}" style="color: wheat"><span>{{$site->site_email}}</span></a></strong>
                        </p>
                        <p class="textwidget_info">
                            <strong>L: <a href="tel:{{$site->hotline}}" style="color: wheat">{{$site->hotline}}</a></strong>
                        </p>
                    </div>
                </aside><!-- /Widget: Text --><!-- Widget: Recent Posts --><aside class="column-1_4 widget widget_recent_posts">
                <h5 class="widget_title" style="color: white">Quick Links </h5>
                <div class="textwidget">
                    <ul>
                        <li><a href="#">My Account</a></li>
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><a href="{{route('aboutus')}}">About Us</a></li>
                        <li><a href="{{route('servicetime')}}">Service Times</a></li>
                        <li><a href="{{route('events')}}">Events</a></li>
                        <li><a href="{{route('store')}}">Store</a></li>
                    </ul>
                </div>
            </aside><!-- /Widget: Recent Posts --><!-- Widget: Instagram --><aside class="column-1_4 widget null-instagram-feed">
                <h5 class="widget_title" style="color: white">Connect </h5>
                <div class="textwidget">
                    <ul>
                        <li><a href="#">Watch Live</a></li>
                        <li><a href="{{route('give')}}">Give</a></li>
                        <li><a href="{{route('contact')}}">Church Experience</a></li>
                        <li><a href="{{route('direction')}}">Location/Direction</a></li>
                        <li><a href="{{route('servicetime')}}">Time/Speaking Schedule</a></li>
                        <li><a href="{{route('connect')}}">Connect</a></li>
                        <li><a href="{{route('sermon')}}">Sermons</a></li>
                    </ul>
                </div>
            </aside><!-- /Widget: Instagram --><!-- Widget: Recent Comments --><aside class="column-1_4 widget widget_recent_comments">
                <h5 class="widget_title" style="color: white">More</h5>
                <div class="textwidget">
                    <ul>
                        <li><a href="#">Our History</a></li>
                        <li><a href="{{route('contact')}}">Contact Us </a></li>
                        <li><a href="{{route('privacy')}}">Privacy Policy</a></li>
                        <li><a href="{{route('terms')}}">Terms of Use</a></li>
                        <li><a href="{{route('resources')}}">Resources</a></li>
                        <li><a href="{{route('newhere')}}">New Here</a></li>
                        <li><a href="{{route('newlifechrist')}}">New Life In Christ</a></li>
                        <li><a href="{{route('downloads')}}">Downloads</a></li>
                    </ul>
            </aside>
            </div>
        </div>
    </div>
</footer>
<div class="copyright_wrap copyright_style_text scheme_original">
    <div class="copyright_wrap_inner">
        <div class="content_wrap">
            <div class="copyright_text" style="float: left"> © Copyright {{date('Y')}} AFTJ Digitals. All Rights Reserved. <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a>
            </div>
        </div>
    </div>
</div>
