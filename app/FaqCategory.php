<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class FaqCategory extends Model
{
    use Sluggable;
    protected $fillable = [
        'name',
        'slug',
    ];

    public function faqs()
    {
        return $this->hasMany(Faq::class, 'faq_category_id', 'id');
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
