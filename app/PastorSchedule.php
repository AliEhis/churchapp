<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PastorSchedule extends Model
{
        protected $table="pastor_schedules";

    protected $fillable=['title','host', 'image', 'event_time', 'event_date', 'venue'];


}
