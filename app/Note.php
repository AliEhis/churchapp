<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable = ['theme', 'text', 'preachers_name', 'note', 'reminder'];

    //     public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }

    //     public function likes(){
    //   return $this->belongsTo('App\TestimonyLike');
    // }

    //     public function is_liked_by_auth_user(){

    //     // $id = Auth::id();
    //     $id = auth::id();

    //     $likers = array();

    //     foreach($this->likes as $like):

    //     array_push($likers, $like->user_id);

    //     endforeach;

    //     if(in_array($id, $likers)){
    //         return true;
    //     }else{
    //         return false;
//   }
    // }
}
