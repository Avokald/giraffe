<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use Sluggable;
    protected $fillable = [
        'name',
        'slug',
        'content',
        'view_count',
        'faq_category_id',
    ];

    public function faqCategory()
    {
        return $this->belongsTo(FaqCategory::class);
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
