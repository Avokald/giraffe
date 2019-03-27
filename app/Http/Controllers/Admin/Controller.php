<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class Controller extends \App\Http\Controllers\Controller
{
    /**
     * Array that contains values to insert into table in archive view
     * @var array
     */
    protected $fields;
    protected $routeName;

    public function __construct(?array $fields, ?string $routeName)
    {
        $this->fields = $fields;
        $this->routeName = $routeName;
    }

    public static function makeTableField(string $display_value, string $field_name, bool $showInTable, string $template, bool $editable) : array
    {
        return [
            'display_value' => $display_value,
            'field_name' => $field_name,
            'show_in_table' => $showInTable,
            'editable' => $editable,
            'template' => $template
        ];
    }

    public function getFields()
    {
        return $this->fields;
    }

    public function getRouteName()
    {
        return $this->routeName;
    }
}
