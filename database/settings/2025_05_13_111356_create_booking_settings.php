<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('booking.percent', 15);
    }

    public function down(): void
    {
        $this->migrator->delete('booking.percent');
    }
};
