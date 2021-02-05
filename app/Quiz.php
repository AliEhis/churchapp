<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $fillable = [
        'question',
        'option1',
        'option2',
        'option3',
        'option4',
        'answer'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
