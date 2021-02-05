<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    protected $fillable = ['name','email', 'phone', 'address', 'member', 'spouse', 'children', 'department', 'married', 'number_of_children', 'status'];
}
