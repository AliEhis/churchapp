<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
        protected $fillable = ['user_id', 'message',  'status', 'activestate', 'chatactivity', 'currentime', 'agent_id'];

        public function user()
    {
        return $this->belongsTo(User::class);
    }
}
