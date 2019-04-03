<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PISummary extends Model
{
    protected $fillable = [
        'comment','user_id',
    ];

    protected $hidden = [
        'units', 'NAVPerUnit', 'NAV', 'cost',
        'cumulative_pref_distribution', 'month_distribution', 'amount_distribution',
        'year_profit_share',
    ];
}
