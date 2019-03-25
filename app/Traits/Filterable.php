<?php

namespace App\Traits;

use \Illuminate\Database\Eloquent\Builder;


trait Filterable
{
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

    public function scopePriceBetween(Builder $query, ?string $column, ?int $min, ?int $max)
    {
        if (!$min) {
            $min = 0;
        }

        if (!$max) {
//            TODO Replace magic number
            $max = 100000000;
        }
        return $query
            ->selectRaw('services.*, min(tariffs.price_month)')
            ->join('tariffs', 'tariffs.service_id', '=', 'services.id')
            ->whereBetween($column, [$min, $max])
            ->groupBy('services.id')
            ->havingRaw('min(tariffs.price_month)');
    }
}