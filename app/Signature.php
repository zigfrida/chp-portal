<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class signature extends Model
{
    protected $fillable = [
        'user_id','form_signature', 'sub_signature',
    ];
}
