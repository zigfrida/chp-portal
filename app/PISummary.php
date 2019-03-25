<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PISummary extends Model
{
    protected $fillable = [
<<<<<<< HEAD
        'user_id', 'class',
=======
        'user_id', 'comment',
>>>>>>> 9c4ed1e75dbf3fd184e6329d713acab9669e6757
    ];

    protected $hidden = [
        'units', 'NAVPerUnit', 'NAV', 'cost',
        'cumulative_pref_distribution', 'month_distribution',
        'year_profit_share',
    ];
}
