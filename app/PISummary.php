<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PISummary extends Model
{
    protected $fillable = [
        'comment',
    ];

    protected $hidden = [
        'user_id', 'units', 'NAVPerUnit', 'NAV', 'cost',
        'cumulative_pref_distribution', 'month_distribution',
        'year_profit_share',
    ];
}
