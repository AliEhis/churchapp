<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class StayConnected extends Model
{
    protected $table = "stay_connected";
    protected $fillable = [
         'email'
    ];
}
