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
        return new Channel('chat-session-' . $this->session_id);
        // PrivateChannel optional
    }

    public function broadcastAs()
    {
        return 'message.sent';
    }

    // 🔥 THIS IS THE KEY PART
    public function broadcastWith()
    {
        return [
            'message' => $this->message,
            'session_id' => $this->session_id,
            'sender' => $this->sender,
            'created_at' => $this->created_at,
        ];
    }
}
