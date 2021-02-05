<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecoverPassword extends Model
{
	 protected $table = ['recover_password'];

    protected $fillable = ['email','token'];
}
