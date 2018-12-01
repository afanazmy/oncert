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
}
