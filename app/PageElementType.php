<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PageElementType extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name',
    ];


    public function setting()
    {
        return $this->hasMany(Setting::class, 'page_element_type_id', 'id');
    }

    public function pageElements()
    {
        return $this->hasMany( \App\PageElement::class );
    }
}
