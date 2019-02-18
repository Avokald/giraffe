<?php

namespace App\Traits;

use \Illuminate\Database\Eloquent\Builder;


trait Filterable {
    public function scopeEqual(Builder $query, ?string $column, ?string $category_id)
    {
        return $category_id
            ? $query->where($column, $category_id)
            : $query;
    }

    public function scopeBetween(Builder $query, ?string $column, ?int $min, ?int $max)
    {
        return ($min && $max)
            ? $query->whereBetween($column, [$min, $max])
            : $query;
    }

    public function scopeSortBy(Builder $query, ?string $column, ?string $direction = 'desc')
    {
        return $column
            ? $query->orderBy($column, $direction)
            : $query;
    }
}