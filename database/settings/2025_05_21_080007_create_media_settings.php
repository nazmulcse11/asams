<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('media.user_avatar', "");
        $this->migrator->add('media.max_file_size', "");
        $this->migrator->add('media.allow_file_types', 'jpg,jpeg,png,gif,svg');
    }

    public function down(): void
    {
        $this->migrator->delete('media.user_avatar');
        $this->migrator->delete('media.max_file_size');
        $this->migrator->delete('media.allow_file_types');
    }
};
