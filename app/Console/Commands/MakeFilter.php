<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;

class MakeFilter extends Command
{
    protected $signature = 'make:filter {name}';
    protected $description = 'Create a new filter class';

    protected Filesystem $files;

    public function __construct(Filesystem $files)
    {
        parent::__construct();
        $this->files = $files;
    }

    public function handle()
    {
        $name = $this->argument('name');

        // Define path
        $filterPath = app_path("Filters/{$name}Filter.php");

        // Check if file already exists
        if ($this->files->exists($filterPath)) {
            $this->errorFormatted("Filter already exists.");
            return;
        }

        // Ensure directory exists
        $this->makeDirectory($filterPath);

        // Create the filter class
        $this->createFilter($name, $filterPath);

        // Success message
        $this->infoFormatted("Filter", $filterPath);
    }

    protected function makeDirectory($path)
    {
        $directory = dirname($path);
        if (!$this->files->exists($directory)) {
            $this->files->makeDirectory($directory, 0777, true, true);
        }
    }

    protected function createFilter($name, $path)
    {
        $stub = <<<PHP
<?php

namespace App\Filters;

use App\Filters\BaseFilter;
use Illuminate\Database\Eloquent\Builder;

class {$name}Filter extends BaseFilter
{
    protected array \$filterableFields = [
        'search.value' => 'filterByGlobalSearch',
        'nameFilter' => 'filterByName',
        'startDateFilter' => 'filterByStartDate',
        'endDateFilter' => 'filterByEndDate',
    ];

    protected function filterByGlobalSearch(Builder \$query, string \$value): void
    {
        \$query->where(function (\$q) use (\$value) {
            \$q->where('name', 'like', "%{\$value}%");
        });
    }

    protected function filterByName(Builder \$query, string \$value): void
    {
        \$query->where('name', 'like', "%{\$value}%");
    }

    protected function filterByStartDate(Builder \$query, string \$date): void
    {
        \$query->where('created_at', '>=', \$date);
    }

    protected function filterByEndDate(Builder \$query, string \$date): void
    {
        \$query->where('created_at', '<=', \$date);
    }
}
PHP;
        $this->files->put($path, $stub);
    }

    protected function infoFormatted($type, $path)
    {
        $formattedPath = "\033[1m[\033[0m{$path}\033[1m]\033[0m"; // Bold brackets and file path
        $this->line("  \033[100;37m INFO \033[0m  {$type} {$formattedPath} created successfully."); // Gray background, white text
    }

    protected function errorFormatted($message)
    {
        $this->line("  \033[41;37m ERROR \033[0m  {$message}"); // Red background, white text
    }
}
