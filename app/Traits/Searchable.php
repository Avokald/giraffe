<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 18.02.2019
 * Time: 16:59
 */

namespace App\Traits;


use \Illuminate\Database\Eloquent\Builder;

trait Searchable
{
    public function scopeSearch(Builder $query, ?string $column, ?string $value)
    {
        return ($column && $value)
            ? $query->where($column, 'LIKE', "%{$value}%")
            : $query;
    }
}