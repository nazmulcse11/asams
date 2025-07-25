<?php

namespace App\Providers;

use App\Settings\GeneralSettings;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;
use Laravolt\Avatar\Facade as Avatar;
use Illuminate\Support\ServiceProvider;

class BladeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Blade::component('layouts.website', 'website-layout');

        Blade::directive('avatar', function ($name) {
            return avatar($name);
        });

        Blade::directive('qr', function ($expression) {
            return "<?php echo qr($expression); ?>";
        });

        Blade::directive('bar', function ($expression) {
            return "<?php echo bar($expression); ?>";
        });

        Blade::directive('status', function ($type_name) {
            return "<?php echo status($type_name); ?>";
        });

        View::share('general_settings', app(GeneralSettings::class));

    }
}
