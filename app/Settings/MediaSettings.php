<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class MediaSettings extends Settings
{
    public string $user_avatar;
    public string $max_file_size;
    public string $allow_file_types;

    public static function group(): string
    {
        return 'media';
    }
}
