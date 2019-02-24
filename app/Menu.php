<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use Sluggable;

    protected $fillable = [
        'name',
        'slug',
    ];

    public function allMenuElements()
    {
        return $this->hasMany(MenuElement::class, 'menu_id', 'id');
    }

    public function menuElements()
    {
        return $this->hasMany(MenuElement::class, 'menu_id', 'id')->where('parent_element_id', null);
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
