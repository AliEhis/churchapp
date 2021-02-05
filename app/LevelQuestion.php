<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LevelQuestion extends Model
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
        'level_lesson_id',
        'created_at',
        'updated_at'
    ];

    public function classess() {
        return $this->belongsTo(LevelLesson::class);
    }
}
