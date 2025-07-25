<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class SecuritySettings extends Settings
{
    public bool $user_registration;
    public bool $email_verification;
    public bool $two_factor;
    public bool $password_policy;
    public bool $login_attempt_limit;

    public static function group(): string
    {
        return 'security';
    }
}
