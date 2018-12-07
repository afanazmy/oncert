<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    protected $guarded = ['created_at', 'updated_at'];

    public function users()
    {
        return $this->hasMany('App\User');
    }
}
