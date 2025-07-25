<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('email.driver', 'smtp');
        $this->migrator->add('email.host', "");
        $this->migrator->add('email.port', "");
        $this->migrator->add('email.username', "");
        $this->migrator->add('email.password', "");
        $this->migrator->add('email.encryption', 'tls');
        $this->migrator->add('email.sender_email', "");
        $this->migrator->add('email.sender_name', "");
        $this->migrator->add('email.test_email', "");
        $this->migrator->add('email.template', "");
    }

    public function down(): void
    {
        $this->migrator->delete('email.driver');
        $this->migrator->delete('email.host');
        $this->migrator->delete('email.port');
        $this->migrator->delete('email.username');
        $this->migrator->delete('email.password');
        $this->migrator->delete('email.encryption');
        $this->migrator->delete('email.sender_email');
        $this->migrator->delete('email.sender_name');
        $this->migrator->delete('email.test_email');
        $this->migrator->delete('email.template');
    }
};
