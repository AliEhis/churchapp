<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DailyDevotion extends Model
{
    protected $fillable=['title','price','image', 'author'];
}
