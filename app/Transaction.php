<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'id', 'user_id', 'room_number', 'rent_started', 'rent_ended'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function payment()
    {
        return $this->hasMany('App\Payment');
    }
}
