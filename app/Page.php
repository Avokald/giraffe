<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use Sluggable;
    protected $fillable = [
        'title',
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

//    public function getElementValues( string $field_name )
//    {
//        return $this->pageElementTypes()->where('name', '=', $field_name)->get()->pageElemets;
//    }

    public function pageElements()
    {
        return $this->hasMany(\App\PageElement::class );
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

}
