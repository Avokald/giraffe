<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use \App\Traits\Filterable;

class Service extends Model
{
    use Sluggable;

    use Filterable;

    protected $fillable = [
        'name',
        'rating',
        'force_rating',
        'description_long',
        'description_short',
        'materials_description',
        'installation_difficulty',
        'features',
        'category_id',
    ];

    protected $casts = [
        'features' => 'array',
    ];

    public function getPriceMonthAttribute()
    {
        return $this->tariffs()->first()->price_month ?? "???";
    }

    public function relationshipsSave(array $request)
    {
        if (isset($request['screenshots'])) {

            foreach ($request['screenshots'] as $screenshot_id) {

                $screenshot = Image::findOrFail($screenshot_id);
                $screenshot->bound(static::class, $this->id, null);
            }
        }

        if (isset($request['banner'])) {

            $banner = Image::findOrFail($request['banner']);
            $banner->updateParent([
                'type' => 'banner',
                'imageable_type' => static::class,
                'imageable_id' => $this->id,
            ]);
        }

        if (isset($request['logo'])) {

            $logo = Image::findOrFail($request['logo']);
            $logo->updateParent([
                'type' => 'logo',
                'imageable_type' => static::class,
                'imageable_id' => $this->id,
            ]);
        }

        $this->compilations()->sync($request['compilations']);
        $this->category_id = $request['category_id'];


        $this->save();
    }

    public function mainUpdate(array $request)
    {
        $this->update($request);

        if (isset($request['banner'])) {

            $banner = Image::findOrFail($request['banner']);
            $banner->updateParent([
                'type' => 'banner',
                'imageable_type' => static::class,
                'imageable_id' => $this->id,
            ]);
        }

        if (isset($request['logo'])) {
            $logo = Image::findOrFail($request['logo']);
            $logo->updateParent([
                'type' => 'logo',
                'imageable_type' => static::class,
                'imageable_id' => $this->id,
            ]);
        }

        if (isset($request['screenshots'])) {

            foreach ($request['screenshots'] as $screenshot_id) {

                $screenshot = Image::findOrFail($screenshot_id);
                $screenshot->bound(static::class, $this->id, 'screenshot');
            }
        }

        if (isset($request['documents'])) {

            foreach ($this->documents as $document) {
                $document->unbound();
            }

            foreach ($request['documents'] as $document_id) {

                $document = Material::findOrFail($document_id);
                $document->bound(static::class, $this->id, 'document');
            }
        }

        $this->compilations()->sync($request['compilations']);
        $this->category_id = $request['category_id'];


        $this->save();
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function compilations()
    {
        return $this->belongsToMany(ServiceCompilation::class);
    }

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
