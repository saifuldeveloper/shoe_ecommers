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
    <title> {{ $setting->title }} </title>


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
    <link href="{{ asset('assets/frontend/css/responsive.css') }}" rel="stylesheet" />
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
    <script>
        let apexUser = {
            name: '',
            phone: '',
            session_id: null
        };

        let messageInterval = null;

        /* Floating chat toggle */
        function toggleChat() {
            const box = document.getElementById('chatBox');
            box.style.display = (box.style.display === 'block') ? 'none' : 'block';
        }

        /* Click Apex4u Assistance */
        function openApexChat() {

            // 🔥 If previous session exists, reopen directly
            const savedSession = localStorage.getItem('apex_session_id');
            const savedName = localStorage.getItem('apex_user_name');

            if (savedSession) {
                apexUser.session_id = savedSession;
                apexUser.name = savedName;

                document.getElementById('chatBox').style.display = 'none';
                document.getElementById('apexChat').style.display = 'flex';

                loadMessages();

                if (!messageInterval) {
                    messageInterval = setInterval(loadMessages, 3000);
                }
                return;
            }

            document.getElementById('chatBox').style.display = 'none';
            document.getElementById('apexUserForm').style.display = 'block';
        }

        /* Close name/phone form */
        function closeUserForm() {
            document.getElementById('apexUserForm').style.display = 'none';
        }

        /* Start chat (CREATE SESSION) */
        function startApexChat() {
            let name = document.getElementById('apexUserName').value.trim();
            let phone = document.getElementById('apexUserPhone').value.trim();

            if (!name || !phone) {
                alert('Please enter your name and phone number');
                return;
            }

            fetch('/support/chat/start', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        name,
                        phone
                    })
                })
                .then(res => res.json())
                .then(data => {
                    apexUser.name = name;
                    apexUser.phone = phone;
                    apexUser.session_id = data.session_id;

                    // 🔥 Save session
                    localStorage.setItem('apex_session_id', data.session_id);
                    localStorage.setItem('apex_user_name', name);

                    document.getElementById('apexUserForm').style.display = 'none';
                    document.getElementById('apexChat').style.display = 'flex';

                    loadMessages();

                    if (!messageInterval) {
                        messageInterval = setInterval(loadMessages, 3000);
                    }
                });
        }

        /* Close apex chat (UI only) */
        function closeApexChat() {
            document.getElementById('apexChat').style.display = 'none';
            if (messageInterval) {
                clearInterval(messageInterval);
                messageInterval = null;
            }
        }

        /* Send message (SAVE TO DB) */
        function sendApexMessage() {
            let input = document.getElementById('apexInput');
            let msg = input.value.trim();
            if (!msg || !apexUser.session_id) return;

            showLoading();

            fetch('/support/chat/send', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({
                    session_id: apexUser.session_id,
                    message: msg
                })
            });

            input.value = '';
        }

        /* Load messages (AJAX POLLING) */
        function loadMessages() {
            if (!apexUser.session_id) return;



            fetch('/support/chat/messages/' + apexUser.session_id)
                .then(res => res.json())
                .then(messages => {
                    let box = document.getElementById('apexMessages');
                    box.innerHTML = '';

                    messages.forEach(m => {
                        box.innerHTML += `
                        <div class="msg ${m.sender}">
                            ${m.message}
                        </div>
                    `;
                    });

                    box.scrollTop = box.scrollHeight;
                });
        }

        /* Restore session on page reload */
        document.addEventListener('DOMContentLoaded', function() {
            const savedSession = localStorage.getItem('apex_session_id');
            const savedName = localStorage.getItem('apex_user_name');

            if (savedSession) {
                apexUser.session_id = savedSession;
                apexUser.name = savedName;

                // document.getElementById('apexChat').style.display = 'flex';
                // loadMessages();

                // messageInterval = setInterval(loadMessages, 3000);
            }
        });

        /* Enter key = send message */
        document.addEventListener('DOMContentLoaded', function() {
            const input = document.getElementById('apexInput');

            if (input) {
                input.addEventListener('keydown', function(e) {
                    if (e.key === 'Enter' && !e.shiftKey) {
                        e.preventDefault(); // newline বন্ধ
                        sendApexMessage(); //  message send
                    }
                });
            }
        });

        /* ================= Smart Close Feature ================= */

        /* Smart close chat with options */
        function smartCloseApexChat() {

            // যদি session খালি থাকে → শুধু hide
            if (!apexUser.session_id) {
                closeApexChat();
                return;
            }

            // Confirm box create dynamically
            let box = document.createElement('div');
            box.id = 'chatCloseOptions';
            box.style.position = 'fixed';
            box.style.bottom = '300px';
            box.style.right = '32px';
            box.style.width = '300px';
            box.style.background = '#fff';
            box.style.border = '1px solid #ddd';
            box.style.padding = '30px';
            box.style.borderRadius = '25px';
            box.style.boxShadow = '0 5px 20px rgba(0,0,0,0.2)';
            box.style.zIndex = 999999;
            box.innerHTML = `
            <p style="margin-bottom:10px;">Do you want to end the chat or continue?</p>
            <button id="continueChatBtn" style="margin-right:5px;padding:6px 12px;background:#e60000;color:#fff;border:none;border-radius:5px;cursor:pointer;width: 100%;margin-bottom: 15px">Continue Chat</button>
            <button id="closeSessionBtn" style="padding:6px 12px;background:#777;color:#fff;border:none;border-radius:5px;cursor:pointer; width: 100%;">Close Session</button>
        `;
            document.body.appendChild(box);

            // Continue Chat → UI hide only
            document.getElementById('continueChatBtn').addEventListener('click', function() {
                document.body.removeChild(box);
                closeApexChat();
            });

            // Close Session → messages + session delete
            document.getElementById('closeSessionBtn').addEventListener('click', function() {
                document.body.removeChild(box);
                deleteChatSession();
            });
        }

        /* Delete session & messages */
        function deleteChatSession() {
            if (!apexUser.session_id) return;

            fetch('/support/chat/delete/' + apexUser.session_id, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                })
                .then(res => res.json())
                .then(data => {
                    if (data.success) {
                        // Clear localStorage
                        localStorage.removeItem('apex_session_id');
                        localStorage.removeItem('apex_user_name');

                        apexUser.session_id = null;

                        // Clear chat UI
                        document.getElementById('apexMessages').innerHTML = '';

                        closeApexChat();
                    } else {
                        alert('Session not found or already deleted');
                    }
                });
        }


        // message load  animation
        function showLoading() {
            let box = document.getElementById('apexMessages');
            if (!box || document.getElementById('msgLoading')) return;

            let div = document.createElement('div');
            div.id = 'msgLoading';
            div.className = 'msg-loading';
            div.innerText = 'Loading messages...';

            box.appendChild(div);
            box.scrollTop = box.scrollHeight;
        }

        function hideLoading() {
            let el = document.getElementById('msgLoading');
            if (el) el.remove();
        }


        document.addEventListener('DOMContentLoaded', function() {
            const closeBtn = document.getElementById('closeUserFormBtn');

            if (closeBtn) {
                closeBtn.addEventListener('click', function() {
                    document.getElementById('apexUserForm').style.display = 'none';
                });
            }
        });
    </script>



    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const btn = document.getElementById("scrollTopBtn");

            if (!btn) return; // button না থাকলে error দিবে না

            window.addEventListener("scroll", () => {
                btn.style.display = window.scrollY > 300 ? "block" : "none";
            });

            btn.addEventListener("click", () => {
                window.scrollTo({
                    top: 0,
                    behavior: "smooth"
                });
            });
        });
    </script>



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
