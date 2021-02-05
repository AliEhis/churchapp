<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
        protected $fillable = ['title', 'description'];


    public function admins() {
        return $this->hasMany(Admin::class, 'role_id');
    }

    public function permission() {
        return $this->hasOne(Permission::class, 'id');
    }


}
