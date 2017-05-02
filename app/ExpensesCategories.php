<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExpensesCategories extends Model
{
    protected $table = 'expenses_categories';

    protected $primaryKey = 'name';

    public $incrementing = false;

    protected $fillable = [
        'name'
    ];
}
