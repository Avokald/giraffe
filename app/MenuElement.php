<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuElement extends Model
{
    protected $fillable = [
        'title',
        'url',
        'parent_id',
        'type_id',
    ];
}
