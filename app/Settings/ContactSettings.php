<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class ContactSettings extends Settings
{

    public string $email;
    public string $phone;
    public string $address_line1;
    public string $address_line2;
    public string $city_id;
    public string $state_id;
    public string $country_id;
    public string $zip_code;
    public string $google_map_iframe;

    public static function group(): string
    {
        return 'contact';
    }
}
