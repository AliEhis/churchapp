<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FAQ extends Model

{
    protected $table = "faqs";

    protected $fillable = ['title', 'body', 'image'];
}
