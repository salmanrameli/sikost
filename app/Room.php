<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $primaryKey = 'room_number';

    protected $fillable = [
        'room_number',
    ];
}
