<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class EmailSettings extends Settings
{

    public string $driver;
    public string $host;
    public string $port;
    public string $username;
    public string $password;
    public string $encryption;
    public string $sender_email;
    public string $sender_name;
    public string $test_email;
    public string $template;

    public static function group(): string
    {
        return 'email';
    }
}
