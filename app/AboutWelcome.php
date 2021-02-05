<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AboutWelcome extends Model
{
    //
    protected $table ='about_welcome';
    protected $fillable = [
        'heading',
        'text',
        'sunday_time',
        'midweek_time',
        'service_heading',
        'image',
        'btn_text',
        'btn_text2',
        'type'
    ];

    protected $hidden = [
        'type',
    ];

}
