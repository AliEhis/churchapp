<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecordedMessage extends Model
{
    //
    protected $table ='recorded_message';
    protected $fillable = [
        'preachers_name',
        'message_title',
        'details',
        'video',
        'month'
    ];


}
