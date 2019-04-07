<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class signature extends Model
{
    protected $fillable = [
        'form_signature', 'sub_signature',
    ];
}
