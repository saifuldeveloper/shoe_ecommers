/* ================= Apex Chat System ================= */

const apexUser = {
    name: "",
    phone: "",
    session_id: null,
};

let messageInterval = null;

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

    if (savedSession) {
        apexUser.session_id = savedSession;
        apexUser.name = savedName;

        qs("chatBox").style.display = "none";
        qs("apexChat").style.display = "flex";
        loadMessages();
        return;
    }

    qs("chatBox").style.display = "none";
    qs("apexUserForm").style.display = "block";
};

/* ========== Close user form ========== */
window.closeUserForm = function () {
    qs("apexUserForm").style.display = "none";
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

/* ========== Close chat (UI only) ========== */
window.closeApexChat = function () {
    qs("apexChat").style.display = "none";
    if (messageInterval) {
        clearInterval(messageInterval);
        messageInterval = null;
    }
};

/* ========== Send message ========== */
window.sendApexMessage = function () {
    const input = qs("apexInput");
    const msg = input.value.trim();

    if (!msg || !apexUser.session_id) return;

    showLoading();

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

/* ========== Load messages ========== */
function loadMessages() {
    if (!apexUser.session_id) return;

    fetch("/support/chat/messages/" + apexUser.session_id)
        .then((res) => res.json())
        .then((messages) => {
            const box = qs("apexMessages");
            box.innerHTML = "";

            messages.forEach((m) => {
                box.insertAdjacentHTML(
                    "beforeend",
                    `
                    <div class="msg ${m.sender}">
                        ${m.message}
                    </div>
                `,
                );
            });

            box.scrollTop = box.scrollHeight;
        });
}

/* ========== Smart close ========== */
window.smartCloseApexChat = function () {
    if (!apexUser.session_id) {
        closeApexChat();
        return;
    }

    const box = document.createElement("div");
    box.id = "chatCloseOptions";
    box.innerHTML = `
        <p>Do you want to end the chat or continue?</p>
        <button id="continueChatBtn">Continue Chat</button>
        <button id="closeSessionBtn">Close Session</button>
    `;
    document.body.appendChild(box);

    qs("continueChatBtn").onclick = () => {
        document.body.removeChild(box);
        closeApexChat();
    };

    qs("closeSessionBtn").onclick = () => {
        document.body.removeChild(box);
        deleteChatSession();
    };
};

/* ========== Delete session ========== */
function deleteChatSession() {
    fetch("/support/chat/delete/" + apexUser.session_id, {
        method: "DELETE",
        headers: window.APEX_HEADERS,
    })
        .then((res) => res.json())
        .then((data) => {
            if (!data.success) return alert("Session not found");

            localStorage.removeItem("apex_session_id");
            localStorage.removeItem("apex_user_name");

            apexUser.session_id = null;
            qs("apexMessages").innerHTML = "";
            closeApexChat();
        });
}

/* ========== Loading animation ========== */
function showLoading() {
    const box = qs("apexMessages");
    if (!box || qs("msgLoading")) return;

    const div = document.createElement("div");
    div.id = "msgLoading";
    div.className = "msg-loading";
    div.innerText = "Loading...";
    box.appendChild(div);
}

/* ========== DOM Ready ========== */
document.addEventListener("DOMContentLoaded", () => {
    // restore session
    const savedSession = localStorage.getItem("apex_session_id");
    const savedName = localStorage.getItem("apex_user_name");
    if (savedSession) {
        apexUser.session_id = savedSession;
        apexUser.name = savedName;
    }

    // Enter = send
    const input = qs("apexInput");
    if (input) {
        input.addEventListener("keydown", (e) => {
            if (e.key === "Enter" && !e.shiftKey) {
                e.preventDefault();
                sendApexMessage();
            }
        });
    }

    // Close user form
    const closeBtn = qs("closeUserFormBtn");
    if (closeBtn) {
        closeBtn.onclick = () => (qs("apexUserForm").style.display = "none");
    }
});
