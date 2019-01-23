<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $fillable = ['url', 'name', 'type'];

    public function materiable()
    {
        return $this->morphTo();
    }
}
