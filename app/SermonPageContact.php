<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SermonPageContact extends Model
{
    protected $fillable=['name','email','message', 'agree'];
}
