<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;

class MakeDropdown extends Command
{
    protected $signature = 'make:dropdown {name}';
    protected $description = 'Create a new dropdown provider class';

    protected Filesystem $files;

    public function __construct(Filesystem $files)
    {
        parent::__construct();
        $this->files = $files;
    }

    public function handle()
    {
        $name = $this->argument('name');

        // Define paths
        $providerPath = app_path("Services/Dropdowns/Providers/{$name}DropdownProvider.php");

        // Check if the file already exists
        if ($this->files->exists($providerPath)) {
            $this->errorFormatted("Dropdown provider already exists.");
            return;
        }

        // Ensure the directory exists
        $this->makeDirectory($providerPath);

        // Create the dropdown provider
        $this->createProvider($name, $providerPath);

        // Success message
        $this->infoFormatted("Dropdown Provider", $providerPath);
    }

    protected function makeDirectory($path)
    {
        $directory = dirname($path);
        if (!$this->files->exists($directory)) {
            $this->files->makeDirectory($directory, 0777, true, true);
        }
    }

    protected function createProvider($name, $path)
    {
        $repositoryInterface = "{$name}RepositoryInterface";

        $stub = <<<PHP
<?php

namespace App\Services\Dropdowns\Providers;

use App\Repositories\Contracts\\{$repositoryInterface};
use App\Services\Dropdowns\Contracts\DropdownProviderInterface;

class {$name}DropdownProvider implements DropdownProviderInterface
{
    protected {$repositoryInterface} \$repository;

    public function __construct({$repositoryInterface} \$repository)
    {
        \$this->repository = \$repository;
    }

    public function getOptions(array \$filters = []): array
    {
        return \$this
            ->repository
            ->all(["id", "name"], \$filters)
            ->map(fn(\$item) => ['id' => \$item->id, 'name' => \$item->name])
            ->toArray();
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
