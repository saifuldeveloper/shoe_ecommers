const apexUser = {
    name: "",
    phone: "",
    session_id: null,
};

let pusher = null;
let chatChannel = null;

/* ========== Helpers ========== */
const qs = (id) => document.getElementById(id);

/* ========== Floating chat toggle ========== */
window.toggleChat = function () {
    const box = qs("chatBox");
    if (!box) return;
    box.style.display = box.style.display === "block" ? "none" : "block";
};

/* ========== Open chat ========== */
window.openApexChat = function () {
    const savedSession = localStorage.getItem("apex_session_id");
    const savedName = localStorage.getItem("apex_user_name");

    qs("chatBox").style.display = "block"; // চ্যাট বক্স ওপেন করা

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

/* ========== Start chat (create session) ========== */
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
        });
};

/* ========== Load messages ========== */
// function loadMessages() {
//     if (!apexUser.session_id) return;

//     fetch("/support/chat/messages/" + apexUser.session_id)
//         .then((res) => res.json())
//         .then((messages) => {
//             const box = qs("apexMessages");
//             box.innerHTML = "";
//             messages.forEach((m) => appendUserMessage(m));

//             // হিস্টোরি লোড হওয়ার পর পুশার কানেক্ট করা
//             initUserPusher(apexUser.session_id);
//         });
// }

function loadMessages() {
    if (!apexUser.session_id) return;

    console.log("⏳ Loading old messages for session:", apexUser.session_id);

    fetch("/support/chat/messages/" + apexUser.session_id)
        .then((res) => res.json())
        .then((messages) => {
            const box = qs("apexMessages");
            if (!box) return;

            box.innerHTML = ""; // আগের কন্টেন্ট ক্লিয়ার করা

            if (messages.length > 0) {
                messages.forEach((m) => appendUserMessage(m));
            } else {
                console.log("ℹ️ No previous messages found in database.");
            }

            // মেসেজ লোড হওয়ার পর রিয়েল-টাইম লিসেনার চালু করা
            initUserPusher(apexUser.session_id);
        })
        .catch((err) => console.error("❌ Error fetching history:", err));
}

/* ========== Send message ========== */
window.sendApexMessage = function () {
    const input = qs("apexInput");
    const msg = input.value.trim();

    if (!msg || !apexUser.session_id) return;

    // Optimistic append: ইউজারের নিজের মেসেজ সাথে সাথে দেখানো
    appendUserMessage({ sender: "user", message: msg });

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

/* ========== Pusher init (Corrected) ========== */
function initUserPusher(sessionId) {
    if (!sessionId) return;

    if (!pusher) {
        Pusher.logToConsole = true;
        pusher = new Pusher("ded5c592779f6c1c07f2", {
            cluster: "ap2",
            forceTLS: true,
        });

        pusher.connection.bind("connected", () => {
            console.log("✅ [USER] Pusher Connected");
        });
    }

    if (!chatChannel) {
        const channelName = "chat-session-" + sessionId;
        chatChannel = pusher.subscribe(channelName);
        console.log("📡 Subscribed to: " + channelName);

        const handleIncoming = (data) => {
            console.log("📥 Realtime Admin Message:", data);

            // শুধু অ্যাডমিনের মেসেজ অ্যাপেন্ড করবে যেন ইউজারের নিজের মেসেজ ডাবল না হয়
            if (data.sender === "admin") {
                appendUserMessage(data);
            }
        };

        // অ্যাডমিন প্যানেলের মতো এখানেও ডট ফিক্স
        chatChannel.bind("message.sent", handleIncoming);
        chatChannel.bind(".message.sent", handleIncoming);
    }
}

/* ========== Append message (Frontend UI) ========== */
function appendUserMessage(m) {
    const box = qs("apexMessages");
    if (!box) return;

    const msgDiv = document.createElement("div");
    msgDiv.className = `msg ${m.sender}`; // 'user' or 'admin'

    // ডাটা ফরম্যাট হ্যান্ডেল করা
    const text = m.message ? m.message : m;
    msgDiv.innerText = text;

    box.appendChild(msgDiv);
    box.scrollTop = box.scrollHeight; // অটো স্ক্রল
}

/* ========== Delete session ========== */
function deleteChatSession() {
    if (!confirm("Are you sure to end this session?")) return;

    fetch("/support/chat/delete/" + apexUser.session_id, {
        method: "DELETE",
        headers: window.APEX_HEADERS,
    })
        .then((res) => res.json())
        .then((data) => {
            localStorage.removeItem("apex_session_id");
            localStorage.removeItem("apex_user_name");
            location.reload(); // ক্লিন করার জন্য রিলোড
        });
}

/* ========== DOM Ready ========== */
document.addEventListener("DOMContentLoaded", () => {
    const savedSession = localStorage.getItem("apex_session_id");
    if (savedSession) {
        apexUser.session_id = savedSession;
        apexUser.name = localStorage.getItem("apex_user_name");
        loadMessages();
    }

    const input = qs("apexInput");
    if (input) {
        input.addEventListener("keydown", (e) => {
            if (e.key === "Enter" && !e.shiftKey) {
                e.preventDefault();
                sendApexMessage();
            }
        });
    }
});
