<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $fillable = ['user_id','status', 'user_location'];


    public function user()
    {
        return $this->belongsTo(User::class);
    } 
}
