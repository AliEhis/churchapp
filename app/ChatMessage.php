<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChatMessage extends Model
{
        //
    protected $table ='chat_messages';
    protected $fillable = [
        'message',
        'sender_id',
        'uploads',
        'user_id'
    ];
    protected $hidden = [
        'updated_at', 'forum_id', 'sender_id', 'id'
    ];
    protected $with = [
        'user'
    ];
    function user()
    {
        return $this->belongsTo(User::class, 'sender_id', 'id');
    }
   

}
