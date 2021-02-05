<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UpcomingEvent extends Model
{
    protected $fillable = ['title', 'minister', 'date', 'time', 'body'];
}
