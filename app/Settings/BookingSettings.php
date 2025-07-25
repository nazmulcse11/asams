<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class BookingSettings extends Settings
{
    public int $percent;

    public static function group(): string
    {
        return 'booking';
    }
}
