<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UploadedFiles extends Model
{
    protected $fillable = [
        'user_id', 'created_time', 'file_name',
    ];
}
