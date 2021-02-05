<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Belief extends Model
{
    //
    protected $fillable = [
        'titletop',
        'portiontop',
        'texttop',
        'phototop',
        'titlebottom',
        'portionbottom',
        'textbottom',
        'photobottom',
        'type',
    ];

    protected $hidden = [
        'type',
    ];


}
