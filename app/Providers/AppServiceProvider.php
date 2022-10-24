<?php

namespace App\Providers;

use App\Model\Link;
use App\Model\WebSetting;
use Illuminate\Database\Events\QueryExecuted;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $links = Link::query()->orderBy('id', 'asc')->get()->toArray();
        $webSettings = WebSetting::query()->get()->pluck('value', 'key')->toArray();

        View::share('links', $links);
        View::share('settings', $webSettings);
    }
}
