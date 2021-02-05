<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrayerTab extends Model
{
    //
    protected $table ='prayer_tabs';
    protected $fillable = [
        'titletop',
        'tagtop',
        'texttop',
        'phototop',
        'titlebottom',
        'tagbottom',
        'textbottom',
        'photobottom',
        'type',
    ];

    protected $hidden = [
        'type',
    ];


}
