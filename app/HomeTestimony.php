<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomeTestimony extends Model
{
    //
    protected $table ='home_testimony';
    protected $fillable = [
        'title',
        'name',
        'age',
        'content',
        'image'
    ];


}
