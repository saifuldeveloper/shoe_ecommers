<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\InteractsWithSockets;

class ChatMessageSent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $message;
    public $session_id;
    public $sender;
    public $created_at;

    public function __construct($message, $session_id, $sender = 'user')
    {
        $this->message = $message;
        $this->session_id = $session_id;
        $this->sender = $sender;
        $this->created_at = now()->toDateTimeString();
    }

    public function broadcastOn()
    {
        // return new Channel('chat-session-' . $this->session_id);
        // PrivateChannel optional

        return [
            new Channel('chat-session-' . $this->session_id), // নির্দিষ্ট চ্যাট বক্সের জন্য
            new Channel('admin-chat-channel')                // অ্যাডমিন সেশন লিস্টের জন্য
        ];
    }

    public function broadcastAs()
    {
        return 'message.sent';
    }

    // 🔥 THIS IS THE KEY PART
    // public function broadcastWith()
    // {
    //     return [
    //         'message' => $this->message,
    //         'session_id' => $this->session_id,
    //         'sender' => $this->sender,
    //         'created_at' => $this->created_at,
    //     ];
    // }

    public function broadcastWith()
    {
        // সেশন থেকে ইউজার ডাটা নিয়ে নিন
        $session = \App\Models\ChatSession::find($this->session_id);

        return [
            'message' => $this->message,
            'session_id' => $this->session_id,
            'sender' => $this->sender,
            'created_at' => $this->created_at,
            'user_name' => $session->name ?? 'Unknown', // নাম যোগ করুন
            'user_phone' => $session->phone ?? '',      // ফোন যোগ করুন
        ];
    }
}
