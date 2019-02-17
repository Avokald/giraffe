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
        $this->menu_id = $request['menu_id'] ?? null;
        $this->parent_element_id = $request['parent_element_id'] ?? null;
        $this->save();
    }

    public function mainUpdate(array $request)
    {
        $this->parent_element_id = $request['parent_element_id'];
        $this->menu_id = $request['menu_id'];
        $this->save();
    }
}
