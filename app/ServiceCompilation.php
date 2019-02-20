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
        $this->save();
        $this->services()->sync($request['services']);

        if (isset($request['logo'])) {

            $image = Image::findOrFail($request['logo']);
            $image->updateParent([
                'type' => $this->logo ? $this->logo->type : null,
                'imageable_type' => static::class,
                'imageable_id' => $this->id,
                'old_image' => $this->logo,
            ]);
        }
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
