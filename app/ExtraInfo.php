<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExtraInfo extends Model
{
    protected $table = 'extra_infos';
    
    protected $hidden = [
        'auditor','legal_counsel','contact_info_name','contact_info',
    ];
}
