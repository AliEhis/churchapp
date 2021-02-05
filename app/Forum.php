<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    protected $fillable = ['topic','theme','image'];
    
    protected $hidden = ['created_at','updated_at', 'user_id'];

    public function user(){
        return $this->belongsTo('App\User');
    }
    public function forumMessages(){
        return $this->hasMany('App\ForumMessage');
    }
}
