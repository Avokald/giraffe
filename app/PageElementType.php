<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PageElementType extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name',
    ];


    public function pageElements()
    {
        return $this->hasMany( \App\PageElement::class );
    }
}
