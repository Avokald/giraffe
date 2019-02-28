<?php

namespace App;

use \App\Traits\Filterable;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class ServiceCompilation extends Model
{
    use Sluggable;

    use Filterable;


    protected $fillable = [
        'name',
        'description',
        'price_month',
        'price_year',
        'slug',
        'category_id',
        'hover_title',
        'hover_description',
    ];

    // TODO Categorizable

    protected $with = [
        'services',
    ];

    public function services()
    {
        return $this->belongsToMany(Service::class);
    }

    public function logo()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function situations()
    {
        return $this->belongsToMany(
            ServiceCompilationSituation::class,
            'service_compilation_service_compilation_situation',
            'service_compilation_situation_id',
            'service_compilation_id'
        );
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

    public function updateMain(array $request)
    {
        $this->update($request);
        if (isset($request['services'])) {
            $this->services()->sync($request['services']);
        } else {
            $this->services()->detach();
        }
        if (isset($request['logo']) && (!$this->logo || ($request['logo'] != $this->logo->id))) {

            $image = Image::findOrFail($request['logo']);
            $image->updateParent([
                'imageable_type' => static::class,
                'imageable_id' => $this->id,
                'old_image' => $this->logo,
            ]);
        }
        $this->save();
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
