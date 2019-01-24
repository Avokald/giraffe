<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tariff extends Model
{
    protected $fillable = ['name', 'price_month', 'price_year', 'permissions', 'is_on'];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
