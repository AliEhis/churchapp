<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookAppointment extends Model
{
  protected $table="book_appointments";

        protected $fillable = ['marital_status', 'reason', 'date', 'name', 'user_id', 'status','rejection_reason', 'appointment_status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
