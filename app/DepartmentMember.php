<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DepartmentMember extends Model
{
    protected $table="department_members";

    protected $fillable = ['name', 'email', 'phone', 'department', 'membership_class', 'user_id'];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
