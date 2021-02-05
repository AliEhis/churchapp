<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConversionForm extends Model
{
    protected $table="conversation_forms";

    protected $fillable = ['name', 'email', 'phone', 'address', 'new_member', 'hear_about_us', 'prayer_point', 'pray_about'];
}
