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
        'description',
    ];

    public function compilations()
    {
        return $this->hasMany(\App\ServiceCompilation::class, 'category_id', 'id');
    }

    public function services()
    {
        return $this->hasMany(\App\Service::class, 'category_id', 'id' );
    }

    public function updateMain(array $request)
    {
        $this->update($request);
        if (isset($request['logo']) && (!$this->logo || ($request['logo'] != $this->logo->id))) {
            $image = Image::findOrFail($request['logo']);
            $image->updateParent(
                'imageable_type' => static::class,
                'imageable_id' => $this->id,
                'old_image' => $this->logo,
            ]);
        }

        if (isset($request['services'])) {

            foreach ($this->services as $service) {
                $service->category_id = null;
                $service->save();
            }

            foreach ($request['services'] as $service_id) {
                $service = Service::findOrFail($service_id);
                $service->category_id = $this->id;
                $service->save();
            }
        }

        $this->save();
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
