<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    use Sluggable;
    protected $guarded = [
        'id',
        'view_count',
    ];

    protected $fillable = [
        'title',
        'content',
        'slug',
        'banner',
        'author_id',
    ];

    public function banner()
    {
        return $this->morphOne(Image::class, 'imageable');
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
