<?php
namespace App\Traits;


use \Illuminate\Database\Eloquent\Builder;


trait Searchable
{
    public function scopeSearch(Builder $query, ?string $column, ?string $value)
    {
        return ($column && $value)
            ? $query->where($column, 'LIKE', "%$value%")
            : $query;
    }
}