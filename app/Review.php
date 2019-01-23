<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = ['text'];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
    
    public function reviewable()
    {
        return $this->morphTo();
    }

    public function replies()
    {
        return $this->morphMany(Review::class, 'reviewable');
    }
}
