<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FundInfo extends Model
{
    protected $table = 'fund_infos';

    protected $fillable = [
        'class','inception_date','min_investment','distributions',
        'preferred_return','performance_fee','redemption','subscription',
        'management_comment',
    ];
}
