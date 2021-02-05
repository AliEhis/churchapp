<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestimonyLike extends Model
{
    protected $fillable = ['user_id', 'testimony_id', 'like'];

    public function user(){
      return $this->belongsTo('App\User');
    }
    public function post(){
      return $this->belongsTo('App\Testimony');
    }
}
