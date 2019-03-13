<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class PageElement extends Model
{
    use Sluggable;
    protected $fillable = [
        'name',
        'values',
        'slug',
        'page_id',
        'page_element_type_id',
        'parent_element_id',
    ];

    protected $casts = [
        'values' => 'array',
    ];

    public function getTemplateAttribute()
    {
        return $this->pageElementType->template;
    }

    public function pageElementType()
    {
        return $this->belongsTo( \App\PageElementType::class );
    }

    public function page()
    {
        return $this->belongsTo(\App\Page::class);
    }

    public function subPageElements()
    {
        return $this->hasMany(static::class, 'parent_element_id', 'id');
    }

    public function parentElement()
    {
        return $this->belongsTo(static::class, 'parent_element_id', 'id');
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
