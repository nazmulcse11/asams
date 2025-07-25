<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('notification.email', true);
        $this->migrator->add('notification.sms', true);
        $this->migrator->add('notification.push', true);
        $this->migrator->add('notification.template', "email, sms, push");
        $this->migrator->add('notification.admin_toggle', false);
        $this->migrator->add('notification.user_preferences', false);
    }

    public function down(): void
    {
        $this->migrator->delete('notification.email');
        $this->migrator->delete('notification.sms');
        $this->migrator->delete('notification.push');
        $this->migrator->delete('notification.template');
        $this->migrator->delete('notification.admin_toggle');
        $this->migrator->delete('notification.user_preferences');
    }
};
