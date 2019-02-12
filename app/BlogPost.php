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
        'author_id',
        'excerpt',
    ];

    protected $with = [
        'author',
    ];
    public function banner()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function author()
    {
        return $this->belongsTo(Admin::class, 'author_id', 'id');
    }

    public function updateBanner(int $banner_id)
    {
        $this->banner ? $this->banner->delete() : null;

        $banner = Image::findOrFail($banner_id);
        $banner->imageable_type = BlogPost::class;
        $banner->imageable_id = $this->id;
        $banner->save();
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
