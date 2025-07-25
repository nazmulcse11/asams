<?php

namespace App\Console\Commands;

use App\Implementations\GoogleTranslate\GoogleTranslate;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class TranslateJsonLang extends Command
{
    protected $signature = 'lang:translate-json {source=en} {target=bn}';
    protected $description = 'Translate Laravel JSON lang file automatically';

    public function handle()
    {
        $source = $this->argument('source');
        $target = $this->argument('target');

        $sourcePath = resource_path("lang/{$source}.json");
        $targetPath = resource_path("lang/{$target}.json");

        if (!File::exists($sourcePath)) {
            $this->error("Source file not found: $sourcePath");
            return 1;
        }

        $sourceStrings = json_decode(File::get($sourcePath), true);
        if (empty($sourceStrings)) {
            $this->warn("Source file is empty.");
            return 1;
        }

        $translatedStrings = [];

        foreach ($sourceStrings as $key => $text) {
            try {
                $translated = GoogleTranslate::translate($source, $target, $text);
                $translatedStrings[$key] = $translated;
                $this->info("[$text] => $translated");
                sleep(1); // prevent throttling
            } catch (\Exception $e) {
                $this->error("Failed to translate [$text]: " . $e->getMessage());
                $translatedStrings[$key] = $text;
            }
        }

        File::put($targetPath, json_encode($translatedStrings, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
        $this->info("Translation complete: {$targetPath}");
        return 0;
    }
}
