<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['name', 'rating', 'description_long', 'description_short', 'installation_difficulty'];

    public function tariffs()
    {
        return $this->hasMany(Tariff::class);
    }
}
