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
            width: 25% !important;

            overflow-y: auto;
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

        .active-dot {
            /* width: 8px;
                                                height: 8px;
                                                background: #28a745;
                                                border-radius: 50%;
                                                position: absolute;
                                                top: 12px;
                                                right: 10px; */
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
    </style>
@endsection

@section('content')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <div class="container-fluid mt-3">
        <h2>User Chat Sessions</h2>
        <div id="chatContainer" class="d-flex gap-3">
            <!-- Sessions List -->
            <ul id="sessionList" class="list-group flex-shrink-0">
                @foreach ($sessions as $s)
                    <li class="list-group-item session-item" data-id="{{ $s->id }}">
                        <strong>{{ $s->name }}</strong>-<br>
                        <small>{{ $s->phone }}</small><br>
                        <br>
                        <small class="text-muted">{{ $s->created_at->diffForHumans() }}</small>
                        <span class="active-dot d-none"></span>
                    </li>
                @endforeach
            </ul>

            <!-- Chat Box -->
            <div id="chatBoxAdmin" class="d-flex flex-column flex-grow-1">
                <div id="messagesAdmin" class="flex-grow-1 p-3 overflow-auto"></div>

                <div class="p-2 d-flex gap-2">
                    <input type="text" id="adminInput" class="form-control" placeholder="Type your reply...">
                    <button id="sendAdmin" class="btn btn-primary">
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

        // মেসেজ স্ক্রিনে দেখানোর ফাংশন
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
            <small class="text-muted" style="font-size: 10px;">${time}</small>
        `;
            box.appendChild(div);
            box.scrollTop = box.scrollHeight;
        }

        // সব সেশনের জন্য সাবস্ক্রাইব করা
        document.querySelectorAll('.session-item').forEach(item => {
            const sessionId = item.dataset.id;
            const channel = pusher.subscribe('chat-session-' + sessionId);

            // যেহেতু আপনার লগে শুধু "message.sent" দেখাচ্ছে, তাই ডট সহ এবং ডট ছাড়া দুইটাই হ্যান্ডেল করছি নিশ্চিত হওয়ার জন্য
            const handleData = (data) => {
                console.log("🔥 View File-এ ডাটা রিসিভ হয়েছে:", data);
                if (String(data.session_id) === String(selectedSession)) {
                    appendAdminMessage(data);
                } else {
                    const other = document.querySelector(`.session-item[data-id="${data.session_id}"]`);
                    if (other) other.querySelector('.active-dot')?.classList.remove('d-none');
                }
            };

            // এই দুইভাবেই বাইন্ড করে রাখছি যাতে কোনো মিস না হয়
            channel.bind('message.sent', handleData);
            channel.bind('.message.sent', handleData);
        });

        // সেশন ক্লিক লজিক
        document.querySelectorAll('.session-item').forEach(item => {
            item.addEventListener('click', function() {
                document.querySelectorAll('.session-item').forEach(i => i.classList.remove('active'));
                this.classList.add('active');
                selectedSession = this.dataset.id;
                this.querySelector('.active-dot')?.classList.add('d-none');

                // হিস্টোরি লোড
                fetch("{{ route('back.chat.messages', '') }}/" + selectedSession)
                    .then(res => res.json())
                    .then(messages => {
                        const box = qs('messagesAdmin');
                        box.innerHTML = '';
                        messages.forEach(m => appendAdminMessage(m));
                    });
            });
        });

        // প্রথম সেশন অটো সিলেক্ট
        window.onload = () => {
            const items = document.querySelectorAll('.session-item');
            if (items.length > 0) items[0].click();
        };

        // অ্যাডমিন রিপ্লাই পাঠানো
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
    </script>
@endsection
