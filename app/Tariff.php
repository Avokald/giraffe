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

    public function getPriceMonthAttribute()
    {
        return $this->attributes['price_month'] / 100;
    }

    public function setPriceMonthAttribute($value)
    {
        $this->attributes['price_month'] = $value * 100;
    }

    public function getPriceYearAttribute()
    {
        return $this->attributes['price_year'] / 100;
    }

    public function setPriceYearAttribute($value)
    {
        $this->attributes['price_year'] = $value * 100;
    }
}
