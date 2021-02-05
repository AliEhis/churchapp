<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{

    protected $fillable = ['user_id', 'sermon_id', 'like'];

        public function user(){
      return $this->belongsTo('App\User');
    }
    public function post(){
      return $this->belongsTo('App\Sermon');
    }

}
