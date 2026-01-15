{{-- @extends('master.back')

@section('styles')
    <style>
        /* Layout */
        #chatContainer {
            height: 80vh;
        }

        /* Sessions list */
        #sessionList {
            width: 250px;
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
        }

        .session-item:hover {
            background: #e9ecef;
        }

        /* Chat box */
        #chatBoxAdmin {
            border: 1px solid #ddd;
            border-radius: 8px;
            background: #f1f3f5;
            display: flex;
            flex-direction: column;
        }

        #messagesAdmin {
            overflow-y: auto;
        }

        /* Chat bubbles */
        .msg-bubble {
            max-width: 70%;
            margin-bottom: 15px;
            /* Added margin to accommodate the arrow below */
            padding: 10px 15px;
            border-radius: 15px;
            word-wrap: break-word;
            position: relative;
        }

        .msg-user {
            background: #fff;
            align-self: flex-start;
            border: 1px solid #ccc;
            float: left !important;
            width: 60% !important;
        }

        .msg-user::before {
            content: "";
            position: absolute;
            bottom: -10px;
            right: 10px;
            width: 0;
            height: 0;
            border-left: 8px solid transparent;
            border-right: 8px solid transparent;
            border-top: 10px solid #fff;
            z-index: 1;
        }

        /* Arrow Border for User's message (Bottom-Left side) */
        .msg-user::after {
            content: "";
            position: absolute;
            bottom: -11px;
            /* Slightly lower than ::before */
            right: 10px;
            width: 0;
            height: 0;
            /* Outer Border (Grey) */
            border-left: 8px solid transparent;
            border-right: 8px solid transparent;
            border-top: 11px solid #b3a9a9;
            /* Color of the bubble border */
            z-index: 0;
        }

        .msg-admin {
            background: #0d6efd;
            color: #fff !important;
            align-self: flex-end;
            float: right !important;
            width: 60% !important;
        }

        /* Arrow for Admin's message (Bottom-Right side) */
        .msg-admin::before {
            content: "";
            position: absolute;
            bottom: -10px;
            /* Position the arrow below the bubble */
            left: 10px;
            /* Adjust to be slightly away from the right edge */
            width: 0;
            height: 0;
            /* Inner Arrow (Blue) */
            border-left: 8px solid transparent;
            border-right: 8px solid transparent;
            border-top: 10px solid #0d6efd;
            /* Color of the bubble background */
            z-index: 1;
        }

        /* Arrow Background Cover for Admin's message (Simulates border cut-off) */
        .msg-admin::after {
            content: "";
            position: absolute;
            bottom: -11px;
            left: 10px;
            width: 0;
            height: 0;
            /* Outer Border/Background Cover (Chat Box Background) */
            border-left: 8px solid transparent;
            border-right: 8px solid transparent;
            border-top: 11px solid #f1f3f5;
            /* Use chat box background to "cut" the border off */
            z-index: 0;
        }



        .msg-time {
            font-size: 10px;
            color: #cad1d6;
            margin-top: 2px;
            display: block;
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
                        <strong>{{ $s->name }}</strong><br>
                        <small>{{ $s->phone }}</small><br>
                        <small class="text-muted">{{ $s->created_at->diffForHumans() }}</small>
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
    <script>
        let selectedSession = null;
        let messageIntervalAdmin = null;

        // Click on a session
        document.querySelectorAll('.session-item').forEach(el => {
            el.addEventListener('click', function() {
                selectedSession = this.dataset.id;

                // clear previous interval
                if (messageIntervalAdmin) clearInterval(messageIntervalAdmin);

                loadAdminMessages();
                messageIntervalAdmin = setInterval(loadAdminMessages, 3000);
            });
        });

        // Load messages
        function loadAdminMessages() {
            if (!selectedSession) return;

            fetch("{{ route('back.chat.messages', '') }}/" + selectedSession)
                .then(res => res.json())
                .then(messages => {
                    let box = document.getElementById('messagesAdmin');
                    box.innerHTML = '';
                    messages.forEach(m => {
                        let bubbleClass = m.sender === 'admin' ? 'msg-admin' : 'msg-user';
                        box.innerHTML += `
                <div class="msg-bubble ${bubbleClass}">
                    ${m.message}
                    <span class="msg-time">(${new Date(m.created_at).toLocaleTimeString()})</span>
                </div>
            `;
                    });
                    box.scrollTop = box.scrollHeight;
                });
        }

        // Send admin reply
        document.getElementById('sendAdmin').addEventListener('click', function() {
            let msg = document.getElementById('adminInput').value.trim();
            if (!msg || !selectedSession) return;

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
            }).then(res => {
                document.getElementById('adminInput').value = '';
                loadAdminMessages();
            });
        });
    </script>
@endsection --}}







@extends('master.back')

@section('styles')
<style>
    /* Layout */
    #chatContainer {
        height: 80vh;
    }

    /* Sessions list */
    #sessionList {
        width: 260px;
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
        color:black
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
{{-- <script>
    let selectedSession = null;
    let messageIntervalAdmin = null;

    // Click on session
    document.querySelectorAll('.session-item').forEach(el => {
        el.addEventListener('click', function () {

            selectedSession = this.dataset.id;

            // Remove active from all
            document.querySelectorAll('.session-item').forEach(item => {
                item.classList.remove('active');
                item.querySelector('.active-dot').classList.add('d-none');
            });

            // Set active
            this.classList.add('active');
            this.querySelector('.active-dot').classList.remove('d-none');

            // Clear previous interval
            if (messageIntervalAdmin) clearInterval(messageIntervalAdmin);

            loadAdminMessages();
            messageIntervalAdmin = setInterval(loadAdminMessages, 3000);
        });
    });

    // Load messages
    function loadAdminMessages() {
        if (!selectedSession) return;

        fetch("{{ route('back.chat.messages', '') }}/" + selectedSession)
            .then(res => res.json())
            .then(messages => {
                let box = document.getElementById('messagesAdmin');
                box.innerHTML = '';

                messages.forEach(m => {
                    let bubbleClass = m.sender === 'admin' ? 'msg-admin' : 'msg-user';
                    box.innerHTML += `
                        <div class="msg-bubble ${bubbleClass}">
                            ${m.message}
                            <span class="msg-time">
                                ${new Date(m.created_at).toLocaleTimeString()}
                            </span>
                        </div>
                    `;
                });

                box.scrollTop = box.scrollHeight;
            });
    }

    // Send admin reply
    document.getElementById('sendAdmin').addEventListener('click', function () {
        let msg = document.getElementById('adminInput').value.trim();
        if (!msg || !selectedSession) return;

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
        }).then(() => {
            document.getElementById('adminInput').value = '';
            loadAdminMessages();
        });
    });

    // /* Enter key = send message */
        document.addEventListener('DOMContentLoaded', function() {
            const input = document.getElementById('adminInput');

            if (input) {
                input.addEventListener('keydown', function(e) {
                    if (e.key === 'Enter' && !e.shiftKey) {
                        e.preventDefault(); // newline বন্ধ
                       
                    }
                });
            }
        });
</script> --}}

<script>
    let selectedSession = null;
    let messageIntervalAdmin = null;

    /* ===============================
       Click on chat session
    =============================== */
    document.querySelectorAll('.session-item').forEach(el => {
        el.addEventListener('click', function () {

            selectedSession = this.dataset.id;

            // Remove active from all
            document.querySelectorAll('.session-item').forEach(item => {
                item.classList.remove('active');
                let dot = item.querySelector('.active-dot');
                if (dot) dot.classList.add('d-none');
            });

            // Set active
            this.classList.add('active');
            let activeDot = this.querySelector('.active-dot');
            if (activeDot) activeDot.classList.remove('d-none');

            // Clear previous interval
            if (messageIntervalAdmin) {
                clearInterval(messageIntervalAdmin);
                messageIntervalAdmin = null;
            }

            loadAdminMessages();
            messageIntervalAdmin = setInterval(loadAdminMessages, 3000);
        });
    });

    /* ===============================
       Load messages
    =============================== */
    function loadAdminMessages() {
        if (!selectedSession) return;

        fetch("{{ route('back.chat.messages', '') }}/" + selectedSession)
            .then(res => res.json())
            .then(messages => {
                let box = document.getElementById('messagesAdmin');
                if (!box) return;

                box.innerHTML = '';

                messages.forEach(m => {
                    let bubbleClass = m.sender === 'admin' ? 'msg-admin' : 'msg-user';

                    box.innerHTML += `
                        <div class="msg-bubble ${bubbleClass}">
                            ${m.message}
                            <span class="msg-time">
                                ${new Date(m.created_at).toLocaleTimeString()}
                            </span>
                        </div>
                    `;
                });

                box.scrollTop = box.scrollHeight;
            });
    }

    /* ===============================
       Send admin message function
    =============================== */
    function sendAdminMessage() {
        let input = document.getElementById('adminInput');
        if (!input) return;

        let msg = input.value.trim();
        if (!msg || !selectedSession) return;

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
        }).then(() => {
            input.value = '';
            loadAdminMessages();
        });
    }

    /* ===============================
       Send button click
    =============================== */
    document.getElementById('sendAdmin')?.addEventListener('click', function () {
        sendAdminMessage();
    });

    /* ===============================
       Enter key = Send message
    =============================== */
    document.addEventListener('DOMContentLoaded', function () {
        const input = document.getElementById('adminInput');

        if (input) {
            input.addEventListener('keydown', function (e) {
                if (e.key === 'Enter' && !e.shiftKey) {
                    e.preventDefault(); // newline বন্ধ
                    sendAdminMessage(); // 🔥 Enter চাপলেই send
                }
            });
        }
    });
</script>

@endsection

