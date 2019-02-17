<?php

namespace App\Http\View\Composers;

use App\Menu;
use Illuminate\View\View;

class MenuComposer
{
    /**
     * The user repository implementation.
     *
     * @var UserRepository
     */
    protected $menus;

    /**
     * Create a new profile composer.
     *
     * @param  array  $menus
     * @return void
     */
    public function __construct()
    {
        // Dependencies automatically resolved by service container...
//        $this->menus = $menus;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $menus = Menu::with('menuElements')->get();
        $view->with('menus', $menus);
    }
}