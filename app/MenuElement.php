<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuElement extends Model
{
    protected $fillable = [
        'title',
        'url',
        'parent_element_id',
        'menu_id',
        'type_id',
    ];

    protected $with = [
        'subMenuElements',
    ];

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }

    public function parentElement()
    {
        return $this->belongsTo(static::class, 'parent_element_id', 'id');
    }

    public function subMenuElements()
    {
        return $this->hasMany(static::class, 'parent_element_id', 'id');
    }

    public function relationshipsSave(array $request)
    {
        $parentElement = static::findOrFail($request['parent_element_id']);
        $this->parent_element_id = $parentElement->id ?? null;
        $this->menu_id = $parentElement->menu_id ?? $request['menu_id'];
        $this->save();
    }

    public function mainUpdate(array $request)
    {
        $parentElement = static::findOrFail($request['parent_element_id']);
        $this->parent_element_id = $parentElement->id ?? null;
        $this->menu_id = $parentElement->menu_id ?? $request['menu_id'];
        $this->save();
    }
}
