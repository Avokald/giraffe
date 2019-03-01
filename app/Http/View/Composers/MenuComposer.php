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
        //
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        // TODO Refactor
        $menus = Menu::with('menuElements')->get();
        $companyLogo = \App\Image::find(\App\Setting::where('slug', 'company-logo')->first()->value);
        $currentSaleText = \App\Setting::where('slug', 'current-sale-text')->first()->value;
        $currentSaleLink = \App\Setting::where('slug', 'current-sale-link')->first()->value;
        $mainPhoneNumber = \App\Setting::where('slug', 'main-phone-number')->first()->value;
        $mainEmailAddress = \App\Setting::where('slug', 'main-email-address')->first()->value;
        $settingFonts = \App\Setting::where('slug', 'setting-fonts')->first()->value ?? null;
        $phrases = \App\Phrase::all();
//        dd($phrases);

        $view->with('menus', $menus);
        $view->with('companyLogo', $companyLogo);
        $view->with('currentSaleText', $currentSaleText);
        $view->with('currentSaleLink', $currentSaleLink);
        $view->with('mainPhoneNumber', $mainPhoneNumber);
        $view->with('mainEmailAddress', $mainEmailAddress);
        $view->with('settingFonts', $settingFonts);
        $view->with('phrases', $phrases);
    }
}