<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChildrenChurchLevel extends Model
{
    //
    protected $fillable = [
        'level',
        'image',
    ];

    public function levelLesson () {
        return $this->hasMany(LevelLesson::class);
    }
}
