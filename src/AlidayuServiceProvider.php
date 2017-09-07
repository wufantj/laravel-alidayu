<?php

namespace WuFan\Alidayu;

use Illuminate\Support\ServiceProvider;

class AlidayuServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/alidayu.php' => config_path('alidayu.php'),
        ]);
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(SmsSender::class, function ($app) {
            return new SmsSender();
        });
    }
}
