<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class p_analysis extends Model
{
    protected $fillable =[

    ];
    //lol
    protected $hidden = [
        'class','duration','credit_score','loan_size',
        'number_of_loans','int_rate','n_of_months','ltm','overall',
        'sharpe_ratio','wml','st_deviation','duration_a',
        'loan_size_a','int_rate_a',
    ];
}
