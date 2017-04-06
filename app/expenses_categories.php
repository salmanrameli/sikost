<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class expenses_categories extends Model
{
    protected $table = 'expenses_categories';

    protected $fillable = [
        'name'
    ];
}
