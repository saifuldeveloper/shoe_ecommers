/* ================== STATE ================== */
const apexUser = {
    name: "",
    phone: "",
    session_id: null,
};

let pusher = null;
let chatChannel = null;
let pusherInitialized = false;

/* ================== HELPERS ================== */
const qs = (id) => document.getElementById(id);
/* ================== CHAT TOGGLE ================== */
// window.toggleChat = function () {
//     const box = qs("chatBox");
//     if (!box) return;
//     // const isOpen = box.style.display === "block";
//     // box.style.display = isOpen ? "none" : "block";

//     // if (!isOpen) {
//     //     openApexChat();
//     // }

//     box.style.display = box.style.display === "block" ? "none" : "block";
// };

/* ================== CHAT TOGGLE (DYNAMIC LOADING) ================== */
/* ================== STEP 1: toggleChat ================== */
// এই ফাংশনটি শুধু চ্যাট বক্সের কন্টেইনার দেখাবে এবং Pusher লোড করবে
// window.toggleChat = function () {
//     const box = qs("chatBox");
//     if (!box) return;

//     if (box.style.display !== "block") {
//         // Pusher লোড করা না থাকলে লোড করো
//         if (typeof Pusher === 'undefined') {
//             const script = document.createElement('script');
//             script.src = "https://js.pusher.com/8.4.0/pusher.min.js";
//             script.onload = () => {
//                 console.log("✅ Pusher Ready.");
//                 box.style.display = "block";
//             };
//             document.head.appendChild(script);
//         } else {
//             box.style.display = "block";
//         }
//     } else {
//         box.style.display = "none";
//     }
// };

window.toggleChat = function () {
    const box = qs("chatBox");
    const form = qs("apexUserForm");

    if (!box) return;

    // always hide apex form when toggling chat box
    if (form) form.style.display = "none";

    // toggle chat box only
    box.style.display = box.style.display === "block" ? "none" : "block";

    // load pusher once (optional)
    if (!pusherInitialized && typeof Pusher === "undefined") {
        const script = document.createElement("script");
        script.src = "https://js.pusher.com/8.4.0/pusher.min.js";
        script.onload = () => {
            console.log("✅ Pusher Ready");
            pusherInitialized = true;
        };
        document.head.appendChild(script);
    }
};
/* ================== CLOSE CHAT UI ================== */

function closeAvijatryChat() {
    document.getElementById("apexChat").style.display = "none";
    const box = qs("chatBox");
    if (box) box.style.display = "none";
}

/* ================== OPEN CHAT ================== */
window.openApexChat = function () {
    const savedSession = localStorage.getItem("apex_session_id");
    const savedName = localStorage.getItem("apex_user_name");

    qs("chatBox").style.display = "block";

    if (!savedSession) {
        qs("apexUserForm").style.display = "block";
        qs("apexChat").style.display = "none";
        return;
    }

    apexUser.session_id = savedSession;
    apexUser.name = savedName;

    qs("apexUserForm").style.display = "none";
    qs("apexChat").style.display = "flex";

    loadMessages();
};

/* ================== START CHAT ================== */
window.startApexChat = function () {
    const name = qs("apexUserName").value.trim();
    const phone = qs("apexUserPhone").value.trim();

    if (!name || !phone) {
        alert("Please enter your name and phone number");
        return;
    }

    fetch("/support/chat/start", {
        method: "POST",
        headers: window.APEX_HEADERS,
        body: JSON.stringify({ name, phone }),
    })
        .then((res) => res.json())
        .then((data) => {
            apexUser.name = name;
            apexUser.phone = phone;
            apexUser.session_id = data.session_id;

            localStorage.setItem("apex_session_id", data.session_id);
            localStorage.setItem("apex_user_name", name);

            qs("apexUserForm").style.display = "none";
            qs("apexChat").style.display = "flex";

            loadMessages();
        })
        .catch(() => alert("Failed to start chat"));
};

/* ================== LOAD MESSAGES ================== */
function loadMessages() {
    if (!apexUser.session_id) return;

    fetch("/support/chat/messages/" + apexUser.session_id)
        .then((res) => res.json())
        .then((messages) => {
            const box = qs("apexMessages");
            if (!box) return;

            box.innerHTML = "";
            messages.forEach((m) => appendMessage(m));

            initUserPusher(apexUser.session_id);
        })
        .catch((err) => console.error("❌ Chat load error:", err));
}

/* ================== SEND MESSAGE ================== */
window.sendApexMessage = function () {
    const input = qs("apexInput");
    const msg = input.value.trim();

    if (!msg || !apexUser.session_id) return;

    appendMessage({ sender: "user", message: msg });

    fetch("/support/chat/send", {
        method: "POST",
        headers: window.APEX_HEADERS,
        body: JSON.stringify({
            session_id: apexUser.session_id,
            message: msg,
        }),
    });

    input.value = "";
};

/* ================== PUSHER INIT ================== */
function initUserPusher(sessionId) {
    if (!sessionId || pusherInitialized) return;

    pusherInitialized = true;

    pusher = new Pusher("ded5c592779f6c1c07f2", {
        cluster: "ap2",
        forceTLS: true,
    });

    const channelName = "chat-session-" + sessionId;

    chatChannel = pusher.subscribe(channelName);
    console.log("📡 Subscribed:", channelName);

    chatChannel.bind("message.sent", handleIncoming);
    chatChannel.bind(".message.sent", handleIncoming);
}

/* ================== HANDLE INCOMING ================== */
function handleIncoming(data) {
    if (data.sender === "admin") {
        appendMessage(data);
    }
}

/* ================== APPEND MESSAGE ================== */
function appendMessage(m) {
    const box = qs("apexMessages");
    if (!box) return;

    const msgDiv = document.createElement("div");
    msgDiv.className = `msg ${m.sender}`;
    msgDiv.textContent = m.message ?? m;

    box.appendChild(msgDiv);
    box.scrollTop = box.scrollHeight;
}

/* ================== SMART CLOSE ================== */
window.smartCloseAvijatryChat = function () {
    if (!apexUser.session_id) {
        closeAvijatryChat();
        return;
    }

    const existingBox = qs("chatCloseOptions");
    if (existingBox) existingBox.remove();

    const box = document.createElement("div");
    box.id = "chatCloseOptions";
    box.style.cssText = `
        position: fixed;
        bottom: 35%;
        right: 32px;
        width: 280px;
        background: #fff;
        border: 1px solid #ddd;
        padding: 25px;
        border-radius: 20px;
        box-shadow: 0 5px 25px rgba(0,0,0,0.3);
        z-index: 999999;
        text-align: center;
    `;

    box.innerHTML = `
        <p style="margin-bottom:20px;font-weight:bold;">Do you want to end the chat or just minimize?</p>
        <button id="continueChatBtn" style="margin-bottom:10px;width:100%;padding:10px;border:none;border-radius:10px;background:#F9B711;color:#fff;font-weight:bold;">Minimize & Continue</button>
        <button id="closeSessionBtn" style="width:100%;padding:10px;border:none;border-radius:10px;background:#dc3545;color:#fff;font-weight:bold;">End Chat Session</button>
    `;

    document.body.appendChild(box);

    qs("continueChatBtn").onclick = () => {
        box.remove();
        closeAvijatryChat();
    };

    qs("closeSessionBtn").onclick = () => {
        box.remove();
        deleteChatSession();
    };
};

/* ================== DELETE SESSION ================== */
window.deleteChatSession = function () {
    if (!apexUser.session_id) return;

    if (
        !confirm(
            "Are you sure you want to permanently delete this chat history?",
        )
    )
        return;

    const channelName = chatChannel?.name;

    fetch("/support/chat/delete/" + apexUser.session_id, {
        method: "POST",
        headers: {
            ...window.APEX_HEADERS,
            "Content-Type": "application/json",
            Accept: "application/json",
        },
    })
        .then((res) => res.json())
        .then(() => {
            localStorage.removeItem("apex_session_id");
            localStorage.removeItem("apex_user_name");

            const msgBox = qs("apexMessages");
            if (msgBox) msgBox.innerHTML = "";

            if (pusher && channelName) {
                pusher.unsubscribe(channelName);
                pusher.disconnect();
            }
            qs("apexUserName").value = "";
            qs("apexUserPhone").value = "";

            pusher = null;
            chatChannel = null;
            pusherInitialized = false;

            apexUser.session_id = null;
            apexUser.name = "";

            closeAvijatryChat();
            // alert("Chat session ended successfully.");
        })
        .catch((err) => console.error("❌ Delete error:", err));
};

document.addEventListener("DOMContentLoaded", () => {
    /* enter to send */
    const input = qs("apexInput");
    if (input) {
        input.addEventListener("keydown", (e) => {
            if (e.key === "Enter" && !e.shiftKey) {
                e.preventDefault();
                sendApexMessage();
            }
        });
    }

    /* close user form */
    const closeBtn = qs("closeUserFormBtn");
    if (closeBtn) {
        closeBtn.addEventListener("click", () => {
            const form = qs("apexUserForm");
            if (form) form.style.display = "none";
        });
    }
});
