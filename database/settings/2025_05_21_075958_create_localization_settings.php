<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('localization.default', "en");
        $this->migrator->add('localization.suppoerted_languages', "en, bn");
        $this->migrator->add('localization.multi_language_support', true);
        $this->migrator->add('localization.switcher_position', 'top');
    }

    public function down(): void
    {
        $this->migrator->delete('localization.default');
        $this->migrator->delete('localization.suppoerted_languages');
        $this->migrator->delete('localization.multi_language_support');
        $this->migrator->delete('localization.switcher_position');
    }
};
