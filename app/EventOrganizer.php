<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventOrganizer extends Model
{
    protected $guarded = ['created_at', 'updated_at'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function position()
    {
        return $this->belongsTo('App\Position');
    }

    public function event()
    {
        return $this->belongsTo('App\Event');
    }
}
