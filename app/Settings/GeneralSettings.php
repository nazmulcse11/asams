<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class GeneralSettings extends Settings
{

    public string $site_name;
    public string $site_logo;
    public string $site_favicon;
    public string $timezone;
    public string $date_time_format;
    public string $currency_code_symbol;
    public string $copyright;
    public string $frontend_status;
    public string $admin_email;

    public static function group(): string
    {
        return 'general';
    }
}
