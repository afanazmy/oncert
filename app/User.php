<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'division_id', 'daily_manager_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function divison()
    {
        return $this->belongsTo('App\Division');
    }

    public function dailyManager()
    {
        return $this->hasOne('App\DailyManager');
    }

    public function eventOrganizers()
    {
        return $this->hasMany('App\EventOrganizer');
    }
}
