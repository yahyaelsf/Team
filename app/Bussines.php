<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bussines extends Model
{
    protected $table = 'bussines';

    protected $fillable = [
        'name', 'description', 'photo', 'created_at', 'updated_at',
    ];
}
