<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InfoBoard extends Model
{
    //
    protected $table ='info_board';
    protected $fillable = [
        'title',
        'description',
        'image'
    ];


}
