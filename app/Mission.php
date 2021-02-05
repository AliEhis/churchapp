<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mission extends Model
{
    protected $fillable = [
        'title',
        'content',
        'image1',
        'image2',
        'image3',
        'image4'
    ];
}
