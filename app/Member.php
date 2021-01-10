<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'name', 'phone','job_title', 'photo', 'created_at', 'updated_at',
    ];
}
