<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Service extends Model
{
    use Sluggable;
    protected $fillable = ['name', 'rating', 'description_long', 'description_short', 'installation_difficulty'];

    public function tariffs()
    {
        return $this->hasMany(Tariff::class);
    }

    public function features()
    {
        return $this->hasMany(Feature::class);
    }

    public function reviews()
    {
        return $this->morphMany(Review::class, 'reviewable');
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
