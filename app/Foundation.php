<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foundation extends Model
{
    protected $fillable = [
        'name',
        'description',
        'duration'
    ];
}
