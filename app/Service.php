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


    public function screenshots()
    {
        return $this->morphMany(Image::class, 'imageable')
            ->where('type', '=', 'screenshot');
    }

    public function logo()
    {
        return $this->morphOne(Image::class, 'imageable')
            ->where('type', '=', 'logo');
    }

    public function banner()
    {
        return $this->morphOne(Image::class, 'imageable')
            ->where('type', '=', 'banner');
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
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
