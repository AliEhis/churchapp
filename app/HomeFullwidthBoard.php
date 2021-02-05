<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomeFullwidthBoard extends Model
{
    //
    protected $table ='home_fullwidth_board';
    protected $fillable = [
        'title',
        'description',
        'image'
    ];


}
