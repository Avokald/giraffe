<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use Sluggable;
    protected $fillable = [
        'name',
        'slug',
        'content',
        'template',
    ];

    protected $with = [
        'pageElements',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getElementByName( string $field_name )
    {
        return $this->pageElements()->where('name', '=', $field_name)->first();
    }

    public function pageElements()
    {
        return $this->hasMany(\App\PageElement::class );
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
