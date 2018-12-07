<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    protected $guarded = ['created_at', 'updated_at'];

    public function division()
    {
        return $this->belongsTo('App\Division', 'division_id');
    }

    public function dailyManager()
    {
        return $this->belongsTo('App\DailyManager', 'daily_manager_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
