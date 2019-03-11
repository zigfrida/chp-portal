<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LPPerformance extends Model
{
    protected $fillable = [
        'class', 'month', 'year', 'value',
    ];

    // protected $hidden = [
    //    'class', 'month', 'year', 'value',
    // ];
}
