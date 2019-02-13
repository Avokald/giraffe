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

    public function updateMain(array $request)
    {
        $this->tags()->sync($request['tags']);

        if (($request['banner'] && !$this->banner) || ($request['banner'] != $this->banner->id)) {
            $image = Image::findOrFail($request['banner']);
            $image->updateParent([
                'type' => $this->banner ? $this->banner->type : null,
                'imageable_type' => static::class,
                'imageable_id' => $this->id,
                'old_banner' => $this->banner,
            ]);
        }

        $this->update($request);
        $this->save();
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
