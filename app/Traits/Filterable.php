<?php

namespace App\Traits;

use \Illuminate\Database\Eloquent\Builder;


trait Filterable {
    public function scopeCategoryId(Builder $query, ?string $category_id)
    {
        return $category_id
            ? $query->where('category_id', $category_id)
            : $query;
    }

    public function scopePriceBetween(Builder $query, ?int $min, ?int $max)
    {
        return ($min && $max)
            ? $query->whereBetween('price_month', [$min, $max])
            : $query;
    }

    public function scopeSortBy(Builder $query, ?string $column, ?string $direction = 'desc')
    {
        return $column
            ? $query->orderBy($column, $direction)
            : $query;
    }
}