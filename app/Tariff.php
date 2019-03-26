<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tariff extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price_month',
        'price_year',
        'permissions',
        'is_recommended',
        'service_id',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }
}
