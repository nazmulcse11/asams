<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('sms.gateway', 'twilio');
        $this->migrator->add('sms.key', "");
        $this->migrator->add('sms.token', "");
        $this->migrator->add('sms.sender_id', "");
        $this->migrator->add('sms.phone', "");
        $this->migrator->add('sms.template', "");
    }

    public function down(): void
    {
        $this->migrator->delete('sms.gateway');
        $this->migrator->delete('sms.key');
        $this->migrator->delete('sms.token');
        $this->migrator->delete('sms.sender_id');
        $this->migrator->delete('sms.phone');
        $this->migrator->delete('sms.template');
    }
};
