<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use Sluggable;

    protected $fillable = [
        'name',
        'slug',
    ];

    public function services()
    {
        return $this->hasMany( \App\Service::class, 'category_id', 'id' );
    }

    public function logo()
    {
        return $this->morphOne(\App\Image::class, 'imageable');
    }

    public function getRouteKeyName()
    {
        return 'slug';
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
