<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    protected $table = "projects";
    protected $fillable=['title','slug','body','date', 'image', 'location'];
}
