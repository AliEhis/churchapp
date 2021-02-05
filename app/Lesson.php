<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    //
    protected $fillable = [
        'title',
        'video',
        'pastor'
    ];

    public function questions () {
        return $this->hasMany(Question::class);
    }
}
