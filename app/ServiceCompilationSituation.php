<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceCompilationSituation extends Model
{
    protected $fillable = [
        'name',
    ];

    public function serviceCompilations()
    {
        return $this->belongsToMany(
            ServiceCompilation::class,
            'service_compilation_service_compilation_situation',
            'service_compilation_situation_id',
            'service_compilation_id'
        );
    }
}
