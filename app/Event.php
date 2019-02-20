<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $guarded = ['created_at', 'updated_at'];

    public function eventOrganizers()
    {
        return $this->hasMany('App\EventOrganizer');
    }

    public function users()
    {
        return $this->belongsToMany('App\User', 'event_organizers', 'event_id', 'user_id')
                        ->using('App\EventOrganizerPivot')
                        ->withPivot([
                            'position_id',
                            'is_verified',
                            'created_by',
                            'updated_by'
                        ]);
    }
}
