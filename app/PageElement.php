<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PageElement extends Model
{
    protected $fillable = [
        'name',
        'values',
        'page_id',
    ];

    protected $casts = [
        'values' => 'array',
    ];

    protected $with = [
        'pageElementType',
    ];

    public function pageElementType()
    {
        return $this->belongsTo( \App\PageElementType::class );
    }

    public function page()
    {
        return $this->belongsTo( \App\Page::class );
    }


}
