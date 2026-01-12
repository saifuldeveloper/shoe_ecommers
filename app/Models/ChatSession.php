<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatSession extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'phone', 'status'];


    public function messages()
    {
        return $this->hasMany(ChatMessage::class, 'chat_session_id');
    }
}
