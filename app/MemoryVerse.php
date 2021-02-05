<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MemoryVerse extends Model
{
    protected $fillable = ['title','body', 'deleted_at', 'status', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}


