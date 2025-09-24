<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <link href="apple-touch-icon.png" rel="apple-touch-icon" />
    <link href="favicon.png" rel="icon" />
    <meta name="author" content="NOUTHEMES" />
    <meta name="keywords" content="Default Description" />
    <meta name="description" content="Default keyword" />
    <title>Shoe - Homepage</title>
    @stack('css')
    <!-- Fonts-->
    <link
        href="https://fonts.googleapis.com/css?family=Archivo+Narrow:300,400,700%7CMontserrat:300,400,500,600,700,800,900"
        rel="stylesheet" />
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  
    <link href="{{ asset('assets/frontend/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/frontend/plugins/ps-icon/style.css') }}" rel="stylesheet" />
    <!-- CSS Library-->
    <link href="{{ asset('assets/frontend/plugins/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/frontend/plugins/owl-carousel/assets/owl.carousel.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/frontend/plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css') }}"
        rel="stylesheet" />
    <link href="{{ asset('assets/frontend/plugins/slick/slick/slick.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/frontend/plugins/bootstrap-select/dist/css/bootstrap-select.min.css') }}"
        rel="stylesheet" />
    <link href="{{ asset('assets/frontend/plugins/Magnific-Popup/dist/magnific-popup.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/frontend/plugins/jquery-ui/jquery-ui.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/frontend/plugins/revolution/css/settings.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/frontend/plugins/revolution/css/layers.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/frontend/plugins/revolution/css/navigation.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/frontend/css/style.css') }}" rel="stylesheet" />
     <link href="{{ asset('assets/frontend/css/custom_style.css') }}" rel="stylesheet" />

</head>

<body>
    <div class="header--sidebar"></div>
    @include('front.inc.header')
    <main class="ps-main">
        @yield('content')
        @include('front.inc.footer')
    </main>
    <!-- JS Library-->
    <!-- jQuery -->
    <script src="{{ asset('assets/frontend/plugins/jquery/dist/jquery.min.js') }}"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('assets/frontend/plugins/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/back/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}">
    </script>
    <!-- Other JS plugins -->
    <script src="{{ asset('assets/frontend/plugins/jquery-bar-rating/dist/jquery.barrating.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/plugins/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/plugins/gmap3.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/plugins/imagesloaded.pkgd.js') }}"></script>
    <script src="{{ asset('assets/frontend/plugins/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/plugins/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/plugins/jquery.matchHeight-min.js') }}"></script>
    <script src="{{ asset('assets/frontend/plugins/slick/slick/slick.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/plugins/elevatezoom/jquery.elevatezoom.js') }}"></script>
    <script src="{{ asset('assets/frontend/plugins/Magnific-Popup/dist/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/plugins/jquery-ui/jquery-ui.min.js') }}"></script>

    <!-- Google Maps -->
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC9UyRrFn8cIqD5cAtLYg3aVSNREWuaQQ&callback=initMap"></script>

    <!-- Revolution Slider Core -->
    <script src="{{ asset('assets/frontend/plugins/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/plugins/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>

    <!-- Revolution Slider Extensions -->
    <script src="{{ asset('assets/frontend/plugins/revolution/js/extensions/revolution.extension.video.min.js') }}">
    </script>
    <script src="{{ asset('assets/frontend/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js') }}">
    </script>
    <script
        src="{{ asset('assets/frontend/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}">
    </script>
    <script src="{{ asset('assets/frontend/plugins/revolution/js/extensions/revolution.extension.navigation.min.js') }}">
    </script>
    <script src="{{ asset('assets/frontend/plugins/revolution/js/extensions/revolution.extension.parallax.min.js') }}">
    </script>
    <script src="{{ asset('assets/frontend/plugins/revolution/js/extensions/revolution.extension.actions.min.js') }}">
    </script>
    <script src="{{ asset('assets/frontend/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js') }}">
    </script>
    <script src="{{ asset('assets/frontend/plugins/revolution/js/extensions/revolution.extension.migration.min.js') }}">
    </script>

    <!-- Custom JS -->
    <script src="{{ asset('assets/frontend/js/main.js') }}"></script>
    <script>
        jQuery(document).ready(function() {
            if (jQuery("#rev_slider_1").revolution === undefined) {
                console.error("Revolution Slider not initialized!");
            } else {
                jQuery("#rev_slider_1").show().revolution({
                    sliderType: "standard",
                    jsFileLocation: "{{ asset('assets/frontend/plugins/revolution/js/') }}",
                    sliderLayout: "auto",
                    delay: 9000,
                    navigation: {
                        arrows: {
                            enable: true
                        }
                    },
                    gridwidth: 1170,
                    gridheight: 600
                });
            }
        });
        
    </script>
    
@stack('js')
</body>

</html>
