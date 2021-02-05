<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript" src="js/jquery/jquery.js"></script>
<script type="text/javascript" src="js/jquery/jquery-migrate.min.js"></script>

<script type="text/javascript" src="js/vendor/photostack/modernizr.min.js"></script>
<script type="text/javascript" src="js/_main.min.js"></script>
<script type="text/javascript" src="js/_packed.js"></script>

<script type="text/javascript" src="js/vendor/essential-grid/js/lightbox.js"></script>
<script type="text/javascript" src="js/vendor/essential-grid/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="js/vendor/essential-grid/js/jquery.themepunch.essential.min.js"></script>
<script type="text/javascript" src="js/essential-grid-homepage-1.js"></script>

<script type="text/javascript" src="js/vendor/revslider/jquery.themepunch.revolution.min.js"></script>

<script type="text/javascript" src="js/vendor/revslider/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="js/vendor/revslider/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="js/vendor/revslider/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="js/revslider-homepage-1.min.js"></script>

<script type="text/javascript" src="js/vendor/html5-jquery-audio-player/jquery-jplayer/jquery.jplayer.js"></script>
<script type="text/javascript" src="js/ttw-musicplayer-homepage-1.min.js"></script>

<script type="text/javascript" src="js/superfish.min.js"></script>
<script type="text/javascript" src="js/core.utils.min.js"></script>
<script type="text/javascript" src="js/core.init.min.js"></script>
<script type="text/javascript" src="js/template.init.min.js"></script>

<script type="text/javascript" src="js/shortcodes.min.js"></script>
<script type="text/javascript" src="js/core.messages.min.js"></script>
<script type="text/javascript" src="js/vendor/magnific/jquery.magnific-popup.min.js"></script>

<script type="text/javascript" src="js/countdown/jquery.plugin.min.js"></script>
<script type="text/javascript" src="js/countdown/jquery.countdown.min.js"></script>
<script type="text/javascript" src="js/vendor/swiper/swiper.min.js"></script>
<script type="text/javascript" src="js/vendor/isotope/dist/isotope.pkgd.min.js"></script>
<script type="text/javascript" src="js/superfish.min.js"></script>
<script type="text/javascript" src="js/core.utils.min.js"></script>
<script type="text/javascript" src="js/core.init.min.js"></script>
<script type="text/javascript" src="js/template.init.min.js"></script>

<script type="text/javascript" src="js/mediaelement/mediaelement-and-player.min.js"></script>

<script type="text/javascript" src="js/shortcodes.min.js"></script>
<script type="text/javascript" src="js/core.messages.min.js"></script>
<script type="text/javascript" src="js/vendor/magnific/jquery.magnific-popup.min.js"></script>

<script type="text/javascript" src="js/jquery/ui/accordion.min.js"></script>
<script type="text/javascript" src="js/jquery/ui/tabs.min.js"></script>
<script type="text/javascript" src="js/jquery/ui/effect.min.js"></script>
<script type="text/javascript" src="js/jquery/ui/effect-fade.min.js"></script>

<script type="text/javascript" src="js/vendor/swiper/swiper.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyAA8O_i6YWSOXQn1vd9SSiIriIqewvBFWk"></script>
<script type="text/javascript" src="js/core.googlemap.min.js"></script>
<script type="text/javascript" src="js/diagram/chart.min.js"></script>

<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
{!! Toastr::message() !!}
<script>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            toastr.error('{{ $error }}','Error',{
                closeButtor: true,
                progressBar: true
            });
        @endforeach
    @endif
</script>
@yield('scripts')

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5c2a22657a79fc1bddf2c97c/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
        </script>
        <!--End of Tawk.to Script-->
