<?php

namespace App\Http\Controllers\Back;

use App\Models\ChatMessage;
use App\Models\ChatSession;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Events\ChatMessageSent;

class ChatAdminController extends Controller
{

    public function sessions()
    {
        $sessions = ChatSession::orderBy('created_at', 'desc')->get();
        return view('back.chat.sessions', compact('sessions'));
    }

    // 2️⃣ Get messages of a session (for AJAX polling)
    public function messages($session)
    {
        $messages = ChatMessage::where('chat_session_id', $session)
            ->orderBy('created_at', 'asc')
            ->get(['sender', 'message', 'created_at']);

        return response()->json($messages);
    }

    // 3️⃣ Admin reply
    public function reply(Request $request)
    {
        $request->validate([
            'session_id' => 'required|integer',
            'message' => 'required|string'
        ]);

        $msg = ChatMessage::create([
            'chat_session_id' => $request->session_id,
            'sender' => 'admin',
            'message' => $request->message
        ]);

          event(new ChatMessageSent(
            $msg->message,
            $msg->chat_session_id,
            $msg->sender
        ));


        return response()->json(['success' => true, 'message_id' => $msg->id]);
    }
}
