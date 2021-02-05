<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewMember extends Model
{
    protected $fillable = ['name', 'email', 'phone', 'address', 'church_visit', 'hear_about_us', 'prayer_point'];
}
