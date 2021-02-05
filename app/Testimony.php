<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimony extends Model
{
    protected $fillable = ['user_id', 'body', 'category', 'status', 'name'];

        public function user()
    {
        return $this->belongsTo(User::class);
    }
}
