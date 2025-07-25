<?php

 namespace App\Settings;

 use Spatie\LaravelSettings\Settings;

 class NotificationSettings extends Settings
 {
     public bool $email;
     public bool $sms;
     public bool $push;
     public string $template;
     public bool $admin_toggle;
     public string $user_preferences;

     public static function group(): string
     {
         return 'notification';
     }
 }
