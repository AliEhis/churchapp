<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    protected $fillable = [
        'hotline', 'hotline2', 'site_name', 'site_email', 'facebook', 'twitter', 'linkedin', 'instagram', 'logo', 'site_address',
    ];
}
