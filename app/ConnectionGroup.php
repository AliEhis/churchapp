<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConnectionGroup extends Model
{
    //
    protected $table ='connection_group';
    protected $fillable = [
        'title',
        'text',
        'type',
        'image',
        'btn_text'
    ];

    protected $hidden = [
        'type',
    ];

}
