<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('general.site_name', "ASAMS");
        $this->migrator->add('general.site_logo', "");
        $this->migrator->add('general.site_favicon', "");
        $this->migrator->add('general.timezone', 'Asia/Dhaka');
        $this->migrator->add('general.date_time_format', 'd-m-Y h:i A');
        $this->migrator->add('general.currency_code_symbol', '৳');
        $this->migrator->add('general.copyright', 'Authorize Sales Agent Management System, All rights Reserved');
        $this->migrator->add('general.frontend_status', '1');
        $this->migrator->add('general.admin_email', "");
    }

    public function down(): void
    {
        $this->migrator->delete('general.site_name');
        $this->migrator->delete('general.site_logo');
        $this->migrator->delete('general.site_favicon');
        $this->migrator->delete('general.timezone');
        $this->migrator->delete('general.date_time_format');
        $this->migrator->delete('general.currency_code_symbol');
        $this->migrator->delete('general.copyright');
        $this->migrator->delete('general.frontend_status');
        $this->migrator->delete('general.admin_email');
    }
};
