<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Service extends Model
{
    use Sluggable;
    protected $fillable = [
        'name',
        'rating',
        'description_long',
        'description_short',
        'installation_difficulty',
        'features'
    ];

    protected $casts = [
        'features' => 'array',
    ];

    public function tariffs()
    {
        return $this->hasMany(Tariff::class);
    }

    public function reviews()
    {
        return $this->morphMany(Review::class, 'reviewable');
    }

    /**
     * Images of the service
     **/
    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
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

    public function materialImages()
    {
        return $this->morphMany(Image::class, 'imageable')
            ->where('type', '=', 'materialImage');
    }


    /**
     * Materials of the service
     **/
    public function materials()
    {
        return $this->morphMany(Material::class, 'materiable');
    }

    public function documents()
    {
        return $this->morphMany(Material::class, 'materiable')
            ->where('type', '=', 'document');
    }

    public function pdfs()
    {
        return $this->morphMany(Material::class, 'materiable')
            ->where('type', '=', 'pdf');
    }

    public function presentations()
    {
        return $this->morphMany(Material::class, 'materiable')
            ->where('type', '=', 'presentation');
    }

    public function videos()
    {
        return $this->morphMany(Material::class, 'materiable')
            ->where('type', '=', 'video');
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
