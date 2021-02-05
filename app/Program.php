<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $fillable=['title','body','days', 'hour', 'minute', 'second', 'slug'];
}
