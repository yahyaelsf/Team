<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts';
    protected $fillable = [
        'name', 'mobile', 'email','message','created_at', 'updated_at',
    ];
}
