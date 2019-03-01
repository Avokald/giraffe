<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phrase extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'value',
    ];

    public static function findBySlug(string $slug)
    {
        return static::where('slug', $slug)->firstOrFail();
    }
}
