<?php

namespace App\Http\Controllers\Front;

use App\Models\ChatMessage;
use App\Models\ChatSession;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Events\ChatMessageSent;

class ChatController extends Controller
{
    public function startChat(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'phone' => 'required|string|max:20',
        ]);

        $session = ChatSession::create([
            'name' => $request->name,
            'phone' => $request->phone,
        ]);

        return response()->json([
            'session_id' => $session->id,
            'name' => $session->name,
        ]);
    }

    /* Save message */
    public function sendMessage(Request $request)
    {
        $request->validate([
            'session_id' => 'required|exists:chat_sessions,id',
            'message' => 'required|string',
        ]);



        $msg = ChatMessage::create([
            'chat_session_id' => $request->session_id,
            'sender' => 'user',
            'message' => $request->message,
        ]);
        event(new ChatMessageSent(
            $msg->message,
            $msg->chat_session_id,
            $msg->sender
        ));



        return response()->json(['success' => true]);
    }

    /* Load messages */
    public function getMessages(ChatSession $session)
    {
        
        $messages = ChatMessage::where('chat_session_id', $session->id) 
        ->orderBy('created_at', 'asc')
        ->get(['sender', 'message', 'created_at', 'chat_session_id']);

    return response()->json($messages);
    }

    public function deleteChat($session)
    {
       $chatSession = ChatSession::where('id', $session)->first();
        if (!$chatSession) {
            return response()->json(['success' => false, 'message' => 'Session not found']);
        }
        ChatMessage::where('chat_session_id', $session)->delete();
        $chatSession->delete();

        return response()->json(['success' => true]);
    }
}
