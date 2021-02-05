<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = ['title', 'video', 'preacher', 'body', 'sub_title'];
}
