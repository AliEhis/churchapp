<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Homecell extends Model
{
    protected $fillable = ['name','email', 'phone', 'address', 'member', 'spouse', 'children', 'married', 'number_of_children', 'status'];
}
