<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('security.user_registration', false);
        $this->migrator->add('security.email_verification', false);
        $this->migrator->add('security.two_factor', false);
        $this->migrator->add('security.password_policy', "");
        $this->migrator->add('security.login_attempt_limit', "");
    }

    public function down(): void
    {
        $this->migrator->delete('security.user_registration');
        $this->migrator->delete('security.email_verification');
        $this->migrator->delete('security.two_factor');
        $this->migrator->delete('security.password_policy');
        $this->migrator->delete('security.login_attempt_limit');
    }
};
