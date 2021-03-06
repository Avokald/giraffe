<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use \App\Traits\Filterable;
use \App\Traits\Searchable;

class Service extends Model
{
    use Sluggable;

    use Filterable;

    use Searchable;

    protected $fillable = [
        'name',
        'rating',
        'force_rating',
        'description_long',
        'description_short',
        'materials_description',
        'installation_difficulty',
        'features',
        'videos',
        'category_id',
        'partner_url',
        'hover_title',
        'hover_description',
    ];

    protected $casts = [
        'features' => 'array',
        'videos'   => 'array',
    ];

    public function getPriceMonthAttribute()
    {
        return $this->tariffs()->min('price_month') / 100 ?? "";
    }

    public function relationshipsSave(array $request)
    {
        if (isset($request['screenshots'])) {
            foreach ($this->screenshots as $screenshot) {
                $screenshot->unbound();
            }

            foreach ($request['screenshots'] as $screenshot_id) {

                $screenshot = Image::findOrFail($screenshot_id);
                $screenshot->bound(static::class, $this->id, 'screenshot');
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

        if (isset($request['documents'])) {

            foreach ($request['documents'] as $document_id) {

                $document = Material::findOrFail($document_id);
                $document->bound(static::class, $this->id, 'document');
            }
        }

        if (isset($request['pdfs'])) {

            foreach ($request['pdfs'] as $pdf_id) {

                $pdf = Material::findOrFail($pdf_id);
                $pdf->bound(static::class, $this->id, 'pdf');
            }
        }

        if (isset($request['presentations'])) {

            foreach ($request['presentations'] as $presentation_id) {

                $presentation = Material::findOrFail($presentation_id);
                $presentation->bound(static::class, $this->id, 'presentation');
            }
        }

        if (isset($request['compilations'])) {
            $this->compilations()->sync($request['compilations']);
        }

        if (isset($request['category_id'])) {
            $this->category_id = $request['category_id'];
        }

        if (isset($request['related_services'])) {
            $this->relatedServicesTo()->sync($request['related_services']);
        }

        $this->save();
    }

    public function mainUpdate(array $request)
    {
        $request['features'] = $request['features'] ?? null;
        $request['videos'] = $request['videos'] ?? null;

        $this->update($request);

        if (isset($request['banner']) && (!$this->banner || ($request['banner'] != $this->banner->id))) {

            $banner = Image::findOrFail($request['banner']);
            $banner->updateParent([
                'type' => 'banner',
                'imageable_type' => static::class,
                'imageable_id' => $this->id,
                'old_image' => $this->banner,
            ]);
        }

        if (isset($request['logo']) && (!$this->logo || ($request['logo'] != $this->logo->id))) {
            $logo = Image::findOrFail($request['logo']);
            $logo->updateParent([
                'type' => 'logo',
                'imageable_type' => static::class,
                'imageable_id' => $this->id,
                'old_image' => $this->logo,
            ]);
        }

        foreach ($this->screenshots as $screenshot) {
            $screenshot->unbound();
        }

        if (isset($request['screenshots'])) {

            foreach ($request['screenshots'] as $screenshot_id) {

                $screenshot = Image::findOrFail($screenshot_id);
                $screenshot->bound(static::class, $this->id, 'screenshot');
            }
        }

        foreach ($this->documents as $document) {
            $document->unbound();
        }

        if (isset($request['documents'])) {

            foreach ($request['documents'] as $document_id) {

                $document = Material::findOrFail($document_id);
                $document->bound(static::class, $this->id, 'document');
            }
        }


        foreach ($this->pdfs as $pdf) {
            $pdf->unbound();
        }

        if (isset($request['pdfs'])) {

            foreach ($request['pdfs'] as $pdf_id) {

                $pdf = Material::findOrFail($pdf_id);
                $pdf->bound(static::class, $this->id, 'pdf');
            }
        }


        foreach ($this->presentations as $presentation) {
            $presentation->unbound();
        }

        if (isset($request['presentations'])) {

            foreach ($request['presentations'] as $presentation_id) {

                $presentation = Material::findOrFail($presentation_id);
                $presentation->bound(static::class, $this->id, 'presentation');
            }
        }


        if (isset($request['compilations'])) {
            $this->compilations()->sync($request['compilations']);
        } else {
            $this->compilations()->detach();
        }

        if (isset($request['category_id'])) {
            $this->category_id = $request['category_id'];
        } else {
            $this->category_id = null;
        }
        if (isset($request['related_services'])) {
            $this->relatedServicesTo()->sync($request['related_services']);
        } else {
            $this->relatedServicesTo()->detach();
        }

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

    public function relatedServicesFrom()
    {
        return $this->belongsToMany(Service::class, 'service_service', 'from_service_id', 'to_service_id');
    }

    public function relatedServicesTo()
    {
        return $this->belongsToMany(Service::class, 'service_service', 'to_service_id', 'from_service_id');
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
