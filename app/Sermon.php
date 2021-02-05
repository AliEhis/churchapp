<?php

namespace App;
use Auth;

use Illuminate\Database\Eloquent\Model;

class Sermon extends Model
{
    protected $fillable = ['title', 'video', 'preacher', 'body', 'date', 'm_video', 'audio', 'm_audio', 'overview', 'm_thumbnail', 'user_id'];

        public function user(){
      return $this->belongsTo('App\User');
    }

        public function likes(){
      return $this->belongsTo('App\Like');
    }

        public function is_liked_by_auth_user(){

        // $id = Auth::id();
        $id = auth::id();

        $likers = array();

        foreach($this->likes as $like):

        array_push($likers, $like->user_id);

        endforeach;

        if(in_array($id, $likers)){
            return true;
        }else{
            return false;
        }
    }
}
