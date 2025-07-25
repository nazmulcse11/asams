<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class LocalizationSettings extends Settings
{

    public string $default;
    public string $suppoerted_languages;
    public bool $multi_language_support;
    public string $switcher_position;

    public static function group(): string
    {
        return 'localization';
    }
}
