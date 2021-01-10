<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apply extends Model
{
    protected $fillable = [
        'name', 'company_name', 'mobile', 'email','services','about_project','file','created_at', 'updated_at',
    ];
    public function setServicesAttribute($value)
    {
        $this->attributes['services'] = json_encode($value);
    }

    public function getServicesAttribute($value)
    {
        return $this->attributes['services'] = json_decode($value);
    }
}
