<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class ExtractLangStrings extends Command
{
    protected $signature = 'lang:extract-json';
    protected $description = 'Extract translation strings from Blade files and update en.json';

    public function handle()
    {
        $viewPath = resource_path('views');
        $langPath = resource_path('lang/en.json');

        $bladeFiles = File::allFiles($viewPath);
        $extracted = [];

        foreach ($bladeFiles as $file) {
            $contents = File::get($file->getRealPath());

            // Match __('...') and @lang('...')
            preg_match_all("/(?:__|@lang)\(\s*['\"](.*?)['\"]\s*[\),]/", $contents, $matches);
            if (!empty($matches[1])) {
                foreach ($matches[1] as $str) {
                    $extracted[$str] = $str; // key and value same
                }
            }
        }

        $existing = File::exists($langPath)
            ? json_decode(File::get($langPath), true)
            : [];

        // Merge existing with new (do not overwrite translations)
        $merged = array_merge($extracted, $existing);

        ksort($merged); // sort alphabetically
        File::put($langPath, json_encode($merged, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

        $this->info("Extracted " . count($extracted) . " strings.");
        $this->info("Updated: " . $langPath);
    }
}
