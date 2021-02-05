<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ForumMessage extends Model
{
    protected $fillable = [
        'forum_id', 
        'message',
        'sender_id',
		'user_id',
		'uploads'
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
    function forum()
    {
        return $this->belongsTo(Forum::class);
    }

}
