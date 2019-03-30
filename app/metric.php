<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class metric extends Model
{
    protected $hidden = [
        'duration', 'credit_score', 'loan_size', 'number_of_loans',
        'int_rate', 'duration_a', 'loan_size_a', 'int_rate_a',
    ];
}
