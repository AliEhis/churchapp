<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LevelLesson extends Model
{
    //
    protected $fillable = [
        'title',
        'video',
        'bible',
        'children_church_level_id'
    ];
    protected $with=["childrenLevel"];
    public function levelQuestions () {
        return $this->hasMany(LevelQuestion::class);
    }
    public function childrenLevel () {
        return $this->belongsTo(ChildrenChurchLevel::class);
    }
  
}
