<?php

namespace App\Providers;

use Illuminate\Database\Events\QueryExecuted;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
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
        error_reporting(E_ERROR);
        DB::connection('mysql')->listen(function (QueryExecuted $event) {
            list($command) = explode(' ', $event->sql);
            Log::info(strtoupper($event->connectionName) . '_' . strtoupper($command), [$event->time, $event->sql,
                                                                                        $event->bindings]);
        });
    }
}
