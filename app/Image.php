<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Material
{
    protected $fillable = ['url', 'name', 'type', 'alt'];

    public function imageable()
    {
        return $this->morphTo();
    }
}
