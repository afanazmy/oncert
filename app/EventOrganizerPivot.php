<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class EventOrganizerPivot extends Pivot
{
    protected $fillable = ['user_id', 'event_id', 'position_id', 'is_verified', 'created_at', 'updated_at'];
    protected $table = "event_organizers";
}
