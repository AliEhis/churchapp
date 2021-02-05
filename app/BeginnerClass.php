<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BeginnerClass extends Model
{
    protected $table="beginner_classes";

    protected $fillable=['title','pastor','video', 'description'];
	
	 public function questions() {
        return $this->hasMany(Question::class);
    }
}
