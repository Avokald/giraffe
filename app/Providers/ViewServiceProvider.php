<?php

namespace App\Providers;

use \App\Menu;
use \App\Setting;
use \App\Image;
use Illuminate\Support\Facades\Cache;

use Illuminate\Support\Facades\View as ViewFacade;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        ViewFacade::composer(['web.partials.header', 'web.partials.footer'], function (View $view) {
//            $menus = Menu::with('menuElements')->get();
            $menus = Cache::remember('menus', 9600, function() {
                return Menu::with('menuElements')->get();
            });
            $companyLogo = \App\Image::find(\App\Setting::where('slug', 'company-logo')->first()->value);
            $view->with('menus', $menus);
            $view->with('companyLogo', $companyLogo);
        });

        ViewFacade::composer(['web.partials.header'], function(View $view) {
            $currentSaleText = \App\Setting::where('slug', 'current-sale-text')->first()->value;
            $currentSaleLink = \App\Setting::where('slug', 'current-sale-link')->first()->value;

            $view->with('currentSaleText', $currentSaleText);
            $view->with('currentSaleLink', $currentSaleLink);
        });

        ViewFacade::composer(['web.partials.footer'], function(View $view) {
            $mainPhoneNumber = \App\Setting::where('slug', 'main-phone-number')->first()->value;
            $mainEmailAddress = \App\Setting::where('slug', 'main-email-address')->first()->value;

            $view->with('mainPhoneNumber', $mainPhoneNumber);
            $view->with('mainEmailAddress', $mainEmailAddress);
        });

        ViewFacade::composer([
            'web.blog.layout_archive',
            'web.blog.layout_single',
            'web.categories.layout_archive',
            'web.categories.layout_single',
            'web.compilations.layout_archive',
            'web.compilations.layout_single',
            'web.faqs.layout_archive',
            'web.faqs.layout_single',
            'web.service.layout_archive',
            'web.service.layout_single',
            'web.templates.index',
            'web.templates.contacts',
            'web.templates.about',
            ], function(View $view) {
                $phrases = Cache::remember('phrases', 9600, function() {
                    return \App\Phrase::all();
                });

                $view->with('phrases', $phrases);
        });
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
