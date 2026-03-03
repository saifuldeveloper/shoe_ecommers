<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <!-- SEO Meta Tags-->
    @yield('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" href="{{ url('/storage/generalSettings/' . $setting->favicon) }}">
    <link rel="apple-touch-icon" href="{{ url('/storage/generalSettings/' . $setting->favicon) }}">
    <meta name="author" content="{{ $setting->title }}">
    <meta name="distribution" content="web">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ url('/storage/generalSettings/' . $setting->favicon) }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ url('/storage/generalSettings/' . $setting->favicon) }}">
    <link rel="apple-touch-icon" sizes="167x167" href="{{ url('/storage/generalSettings/' . $setting->favicon) }}">
    <meta name="keywords" content="Default Description" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="dns-prefetch" href="https://cdnjs.cloudflare.com">
    <title> {{ $setting->title }} </title>
    @stack('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link
        href="https://fonts.googleapis.com/css?family=Archivo+Narrow:300,400,700%7CMontserrat:300,400,500,600,700,800,900&display=swap"
        rel="stylesheet" />
    {{-- <link
        href="https://fonts.googleapis.com/css?family=Archivo+Narrow:300,400,700%7CMontserrat:300,400,500,600,700,800,900"
        rel="stylesheet" /> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
    {{-- <link href="{{ asset('assets/frontend/plugins/revolution/css/settings.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/frontend/plugins/revolution/css/layers.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/frontend/plugins/revolution/css/navigation.css') }}" rel="stylesheet" /> --}}


    <link href="{{ asset('assets/frontend/css/style.css?v=' . time()) }}" rel="stylesheet" />
    <link href="{{ asset('assets/frontend/css/responsive.css?v=' . time()) }}" rel="stylesheet" />
    <link href="{{ asset('assets/frontend/css/custom_style.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/frontend/css/chatbox.css') }}" rel="stylesheet" />
    <style>
        {{ $setting->custom_css }}
    </style>
    {{-- Google AdSense Start --}}
    @if ($setting->is_google_adsense == '1')
        {!! $setting->google_adsense !!}
    @endif
    {{-- Google AdSense End --}}
    {{-- Google AnalyTics Start --}}
    @if ($setting->is_google_analytics == '1')
        {!! $setting->google_analytics !!}
    @endif
    {{-- Google AnalyTics End --}}
    {{-- Facebook pixel  Start --}}
    @if ($setting->is_facebook_pixel == '1')
        {!! $setting->facebook_pixel !!}
    @endif
    {{-- Facebook pixel End --}}
    <script>
        window.APEX_HEADERS = {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        };
    </script>
    <style>
        @media (max-width: 991px) {
            .navigation__column.center {
                display: none !important;
            }

            .navigation__column.center.active {
                display: block !important;
                background: #fff;
                position: absolute;
                top: 60px;
                width: 100%;
                left: 0;
                z-index: 9999;
            }

            /* লোগো এবং আইকন যেন দ্রুত দেখা যায় */
            .navigation__column.left,
            .navigation__column.right {
                visibility: visible !important;
            }

            .header__logo img {
                height: 60px;
                width: auto;
            }
        }
    </style>
</head>

<body>
    <div class="header--sidebar"></div>
    @include('front.inc.header')
    <main class="ps-main">
        @yield('content')
        @include('front.inc.footer')
        <button id="scrollTopBtn">⬆</button>
        @include('front.inc.chatbar')
    </main>
    <!-- jQuery -->
    <script>
        (function() {
            // পেজ পুরোপুরি লোড হওয়ার আগেই ক্লিক ইভেন্ট সেট করা
            var toggle = document.querySelector('.menu-toggle');
            var nav = document.querySelector('.navigation__column.center');

            if (toggle) {
                toggle.onclick = function(e) {
                    e.preventDefault();
                    nav.classList.toggle('active');
                };
            }
        })();
    </script>

    <script src="{{ asset('assets/frontend/plugins/jquery/dist/jquery.min.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


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

    <script src="{{ asset('assets/frontend/js/chat.js') }}" defer></script>
    <script src="{{ asset('assets/frontend/js/main.js?v=' . time()) }}" defer></script>
    @stack('js')
</body>

</html>
