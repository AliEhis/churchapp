<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GetInvolved extends Model
{
    //
    protected $table ='get_involved';
    protected $fillable = [
        'title',
        'topic',
        'video',
        'btn_text'
    ];


}
