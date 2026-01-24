<!-- ===== Chat Bar ===== -->
<div class="chat-btn" onclick="toggleChat()">
    <i class="fas fa-comment-dots"></i>
</div>

<!-- Chat Options Box -->
<div class="chat-box" id="chatBox">
    <div class="chat-header">
        How can we help?
        <span>Choose an option below</span>
        <div class="close" onclick="toggleChat()">✕</div>
    </div>
    <div class="chat-body">
        <div class="chat-card">
            <a href="https://m.me/avijatry" target="_blank">
                <i class="fab fa-facebook-messenger messenger"></i>
                Messenger
            </a>
        </div>
        <div class="chat-card">
            <a href="https://wa.me/88{{ $setting->whatsapp_number }}" target="_blank">
                <i class="fab fa-whatsapp whatsapp"></i>
                WhatsApp
            </a>
        </div>
        <div class="chat-card instagram">
            <a href="https://instagram.com/avijatry" target="_blank">
                <i class="fab fa-instagram"></i>
                Instagram
            </a>
        </div>
        <div class="chat-card apex" onclick="openApexChat()">
            <i class="fas fa-headset"></i>
            Avijatry Assistance
        </div>
    </div>
</div>

<!-- ===== Name & Phone Form ===== -->
<div class="avijatry-user-form" id="apexUserForm">
    <div class="start-form">
        <div class="chat-start-header">
            <span id="closeUserFormBtn">✕</span>
            <h4>Welcome to Avijatry Online Service!</h4>
        </div>
        <div class="chat-start-div">
            <input type="text" id="apexUserName" placeholder="Your Name">
            <input type="text" id="apexUserPhone" placeholder="Your Phone Number" maxlength="11"
                oninput="this.value=this.value.replace(/[^0-9]/g,'')">
            <button onclick="startApexChat()">Start Chat</button>
        </div>
    </div>
</div>

<!-- ===== Avijatry Chat Box ===== -->
<div class="avijatry-chat" id="apexChat">
    <div class="avijatry-chat-header">
        Avijatry Assistance
        <span onclick="smartCloseAvijatryChat()">✕</span>
    </div>
    <div class="avijatry-chat-body" id="apexMessages">
        <!-- messages will appear here -->
    </div>
    <div class="avijatry-chatbox-footer">
        <input type="text" id="apexInput" placeholder="Type your message...">
        <button onclick="sendApexMessage()"><i class="fas fa-paper-plane"></i></button>
    </div>
</div>
