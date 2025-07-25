<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('contact.email', "");
        $this->migrator->add('contact.phone', "");
        $this->migrator->add('contact.address_line1', "");
        $this->migrator->add('contact.address_line2', "");
        $this->migrator->add('contact.city_id', "");
        $this->migrator->add('contact.state_id', "");
        $this->migrator->add('contact.country_id', "");
        $this->migrator->add('contact.zip_code', "");
        $this->migrator->add('contact.google_map_iframe', "");
    }

    public function down(): void
    {
        $this->migrator->delete('contact.email');
        $this->migrator->delete('contact.phone');
        $this->migrator->delete('contact.address_line1');
        $this->migrator->delete('contact.address_line2');
        $this->migrator->delete('contact.city_id');
        $this->migrator->delete('contact.state_id');
        $this->migrator->delete('contact.country_id');
        $this->migrator->delete('contact.zip_code');
        $this->migrator->delete('contact.google_map_iframe');
    }
};
