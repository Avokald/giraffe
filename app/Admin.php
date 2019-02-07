<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $with = ['metadata'];

    public function metadata()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function blogposts()
    {
        return $this->hasMany(Blogpost::class);
    }
}
