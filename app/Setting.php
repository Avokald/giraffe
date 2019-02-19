<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use Sluggable;
    protected $casts = [
        'value' => 'array',
    ];
    protected $fillable = [
        'name',
        'slug',
        'value',
        'page_element_type_id',
    ];

    public function pageElementType()
    {
        return $this->belongsTo(PageElementType::class, 'page_element_type_id', 'id');
    }

    public function getTemplateAttribute()
    {
        return $this->pageElementType->template ?? null;
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
