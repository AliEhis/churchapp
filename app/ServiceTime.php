<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceTime extends Model
{
    protected $fillable = ['days', 'time1', 'time2', 'time3', 'time4', 'time5', 'body'];
}
