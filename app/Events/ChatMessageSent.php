<?php

namespace App\Events;

use Illuminate\Broadcasting\PrivateChannel;
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

    public function __construct($message, $session_id, $sender = 'user')
    {
        $this->message = $message;
        $this->session_id = $session_id;
        $this->sender = $sender;
    }

    public function broadcastOn()
    {
        return new \Illuminate\Broadcasting\Channel('chat-session-' . $this->session_id);
        // return new PrivateChannel('chat-session-' . $this->session_id);
    }

    public function broadcastAs()
    {
        return 'message.sent';
    }
}
