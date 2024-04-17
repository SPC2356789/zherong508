<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $ssss = '12121';
        $aaaa = '121212';

        // 導航共用變數設置在這裡
//        View::composer('layouts.app', function ($view) use ($ssss, $aaaa) {
//            $view->with('navItems', $ssss)
//                ->with('navItems', $aaaa);
//        });
        View::composer('layouts.app', function ($view) use ($ssss, $aaaa) {
            $view->with('navItems', [ $ssss, $aaaa])
            ->with('aab', ['ssss' => $ssss, 'aaaa' => $aaaa])
            ;
        });
    }
}
