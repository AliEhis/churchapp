<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeaturedBox extends Model
{
    //
    protected $table ='featured_box';
    protected $fillable = [
        'title',
        'details',
        'image'
    ];


}
