<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class SmsSettings extends Settings
{

    public string $gateway;
    public string $key;
    public string $token;
    public string $sender_id;
    public string $phone;
    public string $template;

    public static function group(): string
    {
        return 'sms';
    }
}
