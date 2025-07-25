<?php

namespace App\Providers;

use App\Settings\GeneralSettings;
use Illuminate\Support\ServiceProvider;
use Spatie\Activitylog\Facades\CauserResolver;
use Spatie\LaravelSettings\Settings;
use Illuminate\Support\Facades\Config;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        if ($this->app->environment('local') && class_exists(\Laravel\Telescope\TelescopeServiceProvider::class)) {
            $this->app->register(\Laravel\Telescope\TelescopeServiceProvider::class);
            $this->app->register(TelescopeServiceProvider::class);
        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $settings = app(GeneralSettings::class);

        $this->timezone($settings);
    }

    protected function timezone(Settings $settings)
    {
        try {
            // Set timezone
            $timezone = filled($settings->timezone) ? $settings->timezone : 'Asia/Dhaka';
            Config::set('app.timezone', $timezone);
            date_default_timezone_set($timezone); // For native PHP functions
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
