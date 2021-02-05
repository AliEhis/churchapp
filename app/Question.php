<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
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
        'lesson_id',
        'answer',
        'created_at',
        'updated_at'
    ];

    public function classess() {
        return $this->belongsTo(Lesson::class);
    }
}
