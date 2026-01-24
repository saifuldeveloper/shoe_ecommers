@extends('master.back')

@section('styles')
    <style>
        /* Layout */
        #chatContainer {
            height: 80vh;
            width: 100%;
        }

        /* Sessions list */
        #sessionList {
            /* width: 25% !important;

                overflow-y: auto; */
            height: auto;
            height: 80vh;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 10px;
            background: #f8f9fa;
        }

        .session-item {
            padding: 10px;
            margin-bottom: 8px;
            background: #fff;
            border-radius: 6px;
            cursor: pointer;
            transition: 0.2s;
            position: relative;
        }

        .session-item:hover {
            background: #e9ecef;
        }

        /* ACTIVE SESSION */
        .session-item.active {
            background: #eca5a313;
            border-left: 4px solid hsl(36, 83%, 50%);
            color: black
        }

        /* Chat box */
        #chatBoxAdmin {
            border: 1px solid #ddd;
            border-radius: 8px;
            background: #f1f3f5;
            display: flex;
            flex-direction: column;
            width: 75% !important;
        }

        #messagesAdmin {
            overflow-y: auto;
        }

        /* Chat bubbles */
        .msg-bubble {
            max-width: 70%;
            margin-bottom: 15px;
            padding: 10px 15px;
            border-radius: 15px;
            word-wrap: break-word;
            position: relative;
        }

        .msg-user {
            background: #fff;
            align-self: flex-start;
            border: 1px solid #ccc;
            width: 60%;
            float: left;
        }

        .msg-user::before {
            content: "";
            position: absolute;
            bottom: -10px;
            right: 10px;
            border-left: 8px solid transparent;
            border-right: 8px solid transparent;
            border-top: 10px solid #ffffff;
        }

        .msg-admin {
            background: #0d6efd;
            color: #fff;
            align-self: flex-end;
            width: 60%;
            float: right;
        }

        .msg-admin::before {
            content: "";
            position: absolute;
            bottom: -10px;
            left: 10px;
            border-left: 8px solid transparent;
            border-right: 8px solid transparent;
            border-top: 10px solid #0d6efd;
        }

        .msg-time {
            font-size: 10px;
            color: #cad1d6;
            display: block;
            margin-top: 4px;
        }

        #activeChatHeader {
            background: #0d6efd !important;
            /* নীল ব্যাকগ্রাউন্ড */
            color: white !important;
            min-height: 60px;
            width: 100%;
        }

        .user-avatar-circle {
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            flex-shrink: 0;
            /* আইকন যাতে ছোট না হয়ে যায় */
        }

        #headerUserName {
            font-weight: bolder;
            padding-right: 10px;
            margin-bottom: 0;
        }

        #headerUserPhone {
            display: block;
            padding-right: 10px;
            font-size: 11px;
            opacity: 0.8;
        }

        .text-end {
            text-align: right !important;
        }
    </style>
@endsection

@section('content')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <div class="container-fluid mt-3">
        <h2>User Chat Sessions</h2>
        <div id="chatContainer" class="d-flex gap-3">
            <div class="d-flex flex-column flex-shrink-0" style="max-height: 80vh; overflow-y: auto;">
                <div class="mb-2">
                    <input type="text" id="userSearch" class="form-control" style="padding: 20px;"
                        placeholder="Search user by name or phone...">
                </div>

                <ul id="sessionList" class="list-group overflow-auto">
                    @foreach ($sessions as $s)
                        <li class="list-group-item session-item" data-id="{{ $s->id }}">
                            <strong>{{ $s->name }}</strong><br>
                            <small>{{ $s->phone }}</small><br>
                            <small class="text-muted">{{ $s->created_at->diffForHumans() }}</small>
                            <span class="active-dot d-none"></span>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div id="chatBoxAdmin" class="d-flex flex-column flex-grow-1 border">
                <div id="activeChatHeader" class="d-flex align-items-center p-2 border-bottom shadow-sm">
                    <div class="d-flex align-items-center gap-2 w-100 justify-content-end">
                        <div class="text-end">
                            <h6 id="headerUserName" class="mb-0">Select a User</h6>
                            <small id="headerUserPhone" class="text-white-50"></small>
                        </div>
                        <div class="user-avatar-circle">
                            <i class="fas fa-user text-white"></i>
                        </div>
                    </div>
                </div>
                <div id="messagesAdmin" class="flex-grow-1 p-3 overflow-auto"
                    style="height: 450px; background-color: #f0f2f5;"></div>
                <div class="p-2 d-flex gap-2 border-top bg-white">
                    <input type="text" id="adminInput" class="form-control rounded-pill"
                        placeholder="Type your reply...">
                    <button id="sendAdmin" class="btn btn-primary rounded-circle">
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </div>
            </div>

        </div>
    </div>
@endsection
@section('scripts')
    <script src="https://js.pusher.com/8.4.0/pusher.min.js"></script>
    <script>
        Pusher.logToConsole = true;
        const pusher = new Pusher('ded5c592779f6c1c07f2', {
            cluster: 'ap2',
            forceTLS: true
        });

        let selectedSession = null;
        const qs = id => document.getElementById(id);

        // 1.Show MEssage screen Function
        function appendAdminMessage(data) {
            const box = qs('messagesAdmin');
            if (!box) return;

            const bubbleClass = data.sender === 'admin' ? 'msg-admin' : 'msg-user';
            const time = data.created_at ? new Date(data.created_at).toLocaleTimeString([], {
                hour: '2-digit',
                minute: '2-digit'
            }) : '';

            const div = document.createElement('div');
            div.className = `msg-bubble ${bubbleClass} mb-2`;
            div.innerHTML = `
            <div>${data.message}</div>
            <small style="font-size: 10px;">${time}</small>
        `;
            box.appendChild(div);
            box.scrollTop = box.scrollHeight;
        }

        // ২. প্রতিটি সেশনকে পুশার চ্যানেলে সাবস্ক্রাইব করার ফাংশন
        function subscribeToSession(sessionId) {
            const channel = pusher.subscribe('chat-session-' + sessionId);

            const handleData = (data) => {
                console.log("🔥 Data Receive Done:", data);
                if (String(data.session_id) === String(selectedSession)) {
                    appendAdminMessage(data);
                } else {
                    const other = document.querySelector(`.session-item[data-id="${data.session_id}"]`);
                    if (other) {
                        other.querySelector('.active-dot')?.classList.remove('d-none');
                        qs('sessionList').prepend(other);
                    }
                }
            };

            channel.bind('message.sent', handleData);
            channel.bind('.message.sent', handleData);
        }

        // ৩. সেশন আইটেমে ক্লিক করার লজিক (ইমেজ/হেডার আপডেটসহ)
        function bindClickEvent(item) {
            item.addEventListener('click', function() {
                document.querySelectorAll('.session-item').forEach(i => i.classList.remove('active'));
                this.classList.add('active');
                selectedSession = this.dataset.id;
                this.querySelector('.active-dot')?.classList.add('d-none');
                // --- Header data update---
                const userName = this.querySelector('strong').innerText;
                const userPhone = this.querySelector('small').innerText;

                qs('headerUserName').innerText = userName;
                qs('headerUserPhone').innerText = userPhone;
                // -------------------------

                // Chat history Load 
                fetch("{{ route('back.chat.messages', '') }}/" + selectedSession)
                    .then(res => res.json())
                    .then(messages => {
                        const box = qs('messagesAdmin');
                        box.innerHTML = '';
                        messages.forEach(m => appendAdminMessage(m));
                    });
            });
        }

        // 4. Globar channel listen kora ( new user added page not laoded)
        const adminGlobalChannel = pusher.subscribe('admin-chat-channel');
        adminGlobalChannel.bind('message.sent', function(data) {
            const existingSession = document.querySelector(`.session-item[data-id="${data.session_id}"]`);

            if (!existingSession) {
                // When new user, Then add to session list
                const sessionList = qs('sessionList');
                const newLi = document.createElement('li');
                newLi.className = 'list-group-item session-item';
                newLi.setAttribute('data-id', data.session_id);

                // Brordcast user_name এবং user_phone 
                const name = data.user_name || 'New User';
                const phone = data.user_phone || 'Just Joined';

                newLi.innerHTML = `
                <strong>${name}</strong><br>
                <small>${phone}</small><br>
                <small class="text-muted">Just now</small>
                <span class="active-dot"></span>
            `;

                sessionList.prepend(newLi); //  fast list append

                bindClickEvent(newLi); //clik evnet running
                subscribeToSession(data.session_id);  //pusher connecte 
            }
        });

        // 5.page load list binding and subscribing
        document.querySelectorAll('.session-item').forEach(item => {
            bindClickEvent(item);
            subscribeToSession(item.dataset.id);
        });

        //6. Fast Session selectd Auto
        window.onload = () => {
            const items = document.querySelectorAll('.session-item');
            if (items.length > 0) items[0].click();
        };

        // 7.Admin reply  
        const sendReply = () => {
            const input = qs('adminInput');
            const msg = input.value.trim();
            if (!msg || !selectedSession) return;

            input.value = '';

            fetch("{{ route('back.chat.reply') }}", {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({
                    session_id: selectedSession,
                    message: msg
                })
            });
        };

        qs('sendAdmin').addEventListener('click', sendReply);
        qs('adminInput').addEventListener('keydown', e => {
            if (e.key === 'Enter' && !e.shiftKey) {
                e.preventDefault();
                sendReply();
            }
        });

        // 8 . Search Functionality
        qs('userSearch').addEventListener('keyup', function() {
            let filter = this.value.toLowerCase();
            let items = document.querySelectorAll('.session-item');

            items.forEach(item => {
                let userName = item.querySelector('strong').innerText.toLowerCase();
                let userPhone = item.querySelector('small').innerText.toLowerCase();
                item.style.display = (userName.includes(filter) || userPhone.includes(filter)) ? "" :
                    "none";
            });
        });
    </script>
@endsection
