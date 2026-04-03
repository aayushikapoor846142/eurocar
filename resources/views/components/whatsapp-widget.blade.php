<!-- WhatsApp Floating Widget -->
<div class="whatsapp-widget">
    <div class="whatsapp-chat-box" id="whatsappChatBox">
        <div class="chat-header">
            <img src="{{ asset('assets/images/whatsapp-avatar.png') }}" alt="Support" class="avatar">
            <div class="header-text">
                <h4>Europe Car Transfer</h4>
                <p>Typically replies within minutes</p>
            </div>
            <button class="close-chat" id="closeWhatsappChat">&times;</button>
        </div>
        <div class="chat-body">
            <div class="message">
                <p>Hello! 👋</p>
                <p>How can we help you with your transfer?</p>
            </div>
        </div>
        <div class="chat-footer">
            <a href="https://wa.me/{{ config('app.whatsapp_number') }}?text={{ urlencode(config('app.whatsapp_message')) }}" 
               target="_blank" 
               class="start-chat-btn">
                <i class="feather-message-circle"></i> Start Chat
            </a>
        </div>
    </div>
    
    <button class="whatsapp-button" id="whatsappButton">
        <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
            <path d="M16 0c-8.837 0-16 7.163-16 16 0 2.825 0.737 5.607 2.137 8.048l-2.137 7.952 7.933-2.127c2.42 1.37 5.173 2.127 8.067 2.127 8.837 0 16-7.163 16-16s-7.163-16-16-16zM16 29.467c-2.482 0-4.908-0.646-7.07-1.87l-0.507-0.292-5.203 1.393 1.38-5.137-0.324-0.527c-1.332-2.17-2.043-4.67-2.043-7.233 0-7.51 6.11-13.62 13.62-13.62s13.62 6.11 13.62 13.62-6.11 13.62-13.62 13.62zM21.305 18.694c-0.372-0.186-2.197-1.083-2.537-1.208-0.341-0.124-0.589-0.186-0.837 0.186s-0.961 1.208-1.179 1.456c-0.217 0.248-0.434 0.279-0.806 0.093s-1.571-0.579-2.991-1.845c-1.107-0.986-1.854-2.203-2.071-2.575s-0.023-0.573 0.163-0.758c0.167-0.166 0.372-0.434 0.558-0.651s0.248-0.372 0.372-0.62c0.124-0.248 0.062-0.465-0.031-0.651s-0.837-2.016-1.147-2.759c-0.303-0.724-0.611-0.626-0.837-0.638-0.217-0.011-0.465-0.013-0.713-0.013s-0.651 0.093-0.992 0.465c-0.341 0.372-1.301 1.271-1.301 3.101s1.332 3.597 1.518 3.845c0.186 0.248 2.625 4.006 6.359 5.617 0.889 0.383 1.583 0.612 2.123 0.783 0.893 0.284 1.706 0.244 2.349 0.148 0.717-0.107 2.197-0.898 2.507-1.766s0.31-1.611 0.217-1.766c-0.093-0.155-0.341-0.248-0.713-0.434z" fill="currentColor"/>
        </svg>
    </button>
</div>

<style>
.whatsapp-widget {
    position: fixed;
    bottom: 20px;
    right: 20px;
    z-index: 9999;
}

.whatsapp-button {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background: #25D366;
    border: none;
    box-shadow: 0 4px 12px rgba(37, 211, 102, 0.4);
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
    color: white;
}

.whatsapp-button:hover {
    transform: scale(1.1);
    box-shadow: 0 6px 16px rgba(37, 211, 102, 0.6);
}

.whatsapp-button svg {
    width: 32px;
    height: 32px;
}

.whatsapp-chat-box {
    position: absolute;
    bottom: 80px;
    right: 0;
    width: 320px;
    background: white;
    border-radius: 12px;
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
    display: none;
    flex-direction: column;
    overflow: hidden;
    animation: slideUp 0.3s ease;
}

.whatsapp-chat-box.active {
    display: flex;
}

@keyframes slideUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.chat-header {
    background: #075E54;
    color: white;
    padding: 15px;
    display: flex;
    align-items: center;
    gap: 10px;
}

.chat-header .avatar {
    width: 45px;
    height: 45px;
    border-radius: 50%;
    object-fit: cover;
}

.chat-header .header-text h4 {
    margin: 0;
    font-size: 16px;
    font-weight: 600;
}

.chat-header .header-text p {
    margin: 0;
    font-size: 12px;
    opacity: 0.9;
}

.close-chat {
    margin-left: auto;
    background: none;
    border: none;
    color: white;
    font-size: 24px;
    cursor: pointer;
    padding: 0;
    width: 30px;
    height: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.chat-body {
    padding: 20px;
    background: #ECE5DD;
    min-height: 150px;
}

.chat-body .message {
    background: white;
    padding: 12px;
    border-radius: 8px;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
}

.chat-body .message p {
    margin: 0 0 8px 0;
    font-size: 14px;
    line-height: 1.4;
}

.chat-body .message p:last-child {
    margin-bottom: 0;
}

.chat-footer {
    padding: 15px;
    background: white;
}

.start-chat-btn {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    background: #25D366;
    color: white;
    padding: 12px 20px;
    border-radius: 25px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
}

.start-chat-btn:hover {
    background: #128C7E;
    color: white;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(37, 211, 102, 0.3);
}

@media (max-width: 768px) {
    .whatsapp-chat-box {
        width: 280px;
        bottom: 70px;
    }
    
    .whatsapp-button {
        width: 50px;
        height: 50px;
    }
    
    .whatsapp-button svg {
        width: 28px;
        height: 28px;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const whatsappButton = document.getElementById('whatsappButton');
    const whatsappChatBox = document.getElementById('whatsappChatBox');
    const closeWhatsappChat = document.getElementById('closeWhatsappChat');
    
    whatsappButton.addEventListener('click', function() {
        whatsappChatBox.classList.toggle('active');
    });
    
    closeWhatsappChat.addEventListener('click', function() {
        whatsappChatBox.classList.remove('active');
    });
    
    // Close chat box when clicking outside
    document.addEventListener('click', function(event) {
        if (!whatsappButton.contains(event.target) && !whatsappChatBox.contains(event.target)) {
            whatsappChatBox.classList.remove('active');
        }
    });
});
</script>
