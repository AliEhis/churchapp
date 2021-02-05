<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GeneralDetail extends Model
{
    //

    protected $table = "generaldetails";

    protected $fillable = [
        'about_content',
        'privacy_policy',
        'terms_of_use',
        'career_writeup',
        'about_intro',
        'about_image1',
        'about_image2',
        'about_image3',
        'page_holder',
        'who_we_are',
        'what_we_do',
        'home_intro',
        'introimage',
        'aims',
        'fundraise_content',
        'standard',
        'column1',
        'column2',
        'column3',
        'column4',
        'column5',
        'header1',
        'header2',
        'header3',
        'header4',
        'header5',
        'slider1',
        'sub_header1',
        'slider2',
        'sub_header2',
        'slider3',
        'sub_header3',
        'slider4',
        'sub_header4',
        'slider5',
        'sub_header5',
        'content_1',
        'content_2',
        'content_3',
        'content_4',
        'content_5',
        'content_6'
    ];
}
