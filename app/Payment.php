<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'id', 'renter_id', 'room_number', 'date', 'amount'
    ];
}
