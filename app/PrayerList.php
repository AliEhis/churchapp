<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrayerList extends Model
{
    protected $fillable = ['title', 'body', 'name', 'image'];
}
