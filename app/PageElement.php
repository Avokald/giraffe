<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PageElement extends Model
{
    protected $fillable = [
        'name',
        'values',
        'page_id',
        'page_element_type_id',
    ];

    protected $casts = [
        'values' => 'array',
    ];

    protected $with = [
        'pageElementType',
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
}
