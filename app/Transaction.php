<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'id', 'user_id', 'room_number', 'rent_started', 'rent_ended'
    ];
}
