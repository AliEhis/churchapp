<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrayerRequest extends Model
{
    protected $fillable = ['title', 'body', 'name', 'email', 'address', 'phone', 'user_id', 'status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

