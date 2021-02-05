<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table="events";

    protected $fillable=['title','slug','body', 'image', 'event_time', 'event_date', 'venue','speaker_name', 'speaker_bio', 'bible','topic', 'tag', 'service_type', 'speaker_image'];

    public static function eventsarchives()
    {
        return static::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
                    ->groupBy('year','month')
                    ->orderByRaw('min(created_at) desc')
                    ->get()
                    ->toArray();
    }
}
