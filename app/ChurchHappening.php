<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChurchHappening extends Model
{
    protected $fillable = [
        'title', 'body', 'image', 'slug'
    ];
}
