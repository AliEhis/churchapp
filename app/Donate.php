<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donate extends Model
{
    protected $table = "donates";
    protected $fillable = [
        'name', 'email', 'phone', 'address', 'amount', 'payment_status', 'reference', 'status', 'payment_type', 'purpose', 'reference'
    ];

    public function users () {
        return $this->belongsTo('App\User');
    }
}
