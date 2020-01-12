<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'division_id', 'daily_manager_id', 'has_certificate', 'has_filled_form', 'is_kadiv', 'is_active', 'is_locked'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function division()
    {
        return $this->belongsTo('App\Division', 'division_id');
    }

    public function dailyManager()
    {
        return $this->belongsTo('App\DailyManager', 'daily_manager_id');
    }

    public function eventOrganizers()
    {
        return $this->hasMany('App\EventOrganizer')->with('position', 'event');
    }

    public function certificate()
    {
        return $this->hasMany('App\Certificate');
    }

    public function events()
    {
        return $this->belongsToMany('App\Event', 'event_organizers', 'user_id', 'event_id')
                        ->using('App\EventOrganizerPivot')
                        ->withPivot([
                            'position_id',
                            'is_verified',
                            'created_by',
                            'updated_by'
                        ]);
    }
}
