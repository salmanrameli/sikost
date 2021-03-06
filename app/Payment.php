<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'id', 'renter_id', 'room_number', 'date', 'amount'
    ];

    public function transaction()
    {
        return $this->belongsTo('App\Transaction', 'renter_id');
    }

    public function ruser()
    {
        return $this->belongsTo('App\User', 'renter_id');
    }
}
