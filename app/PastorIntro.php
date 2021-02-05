<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PastorIntro extends Model
{
    //
    protected $table ='pastor_intro';
    protected $fillable = [
        'title',
        'content',
        'pastor_name',
        'pastor_position',
        'image'
    ];


}
