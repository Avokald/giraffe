<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class ServiceCompilation extends Model
{
    use Sluggable;
    protected $fillable = [
        'name',
        'description',
        'price_month',
        'price_year',
        'slug',
        'category_id',
    ];

    protected $with = [
        'services',
    ];

    public function services()
    {
        return $this->belongsToMany(Service::class);
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
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
