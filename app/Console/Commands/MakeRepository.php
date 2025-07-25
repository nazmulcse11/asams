<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;

class MakeRepository extends Command
{
    protected $signature = 'make:repository {name}';
    protected $description = 'Create a new repository and interface';

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
        $interfacePath = app_path("Repositories/Contracts/{$name}RepositoryInterface.php");
        $repositoryPath = app_path("Repositories/{$name}Repository.php");
        $providerPath = app_path("Providers/RepositoryRegisterProvider.php");

        // Check if files already exist
        $exists = false;

        if ($this->files->exists($interfacePath)) {
            $this->errorFormatted("Repository interface already exists.");
            $exists = true;
        }
        if ($this->files->exists($repositoryPath)) {
            $this->errorFormatted("Repository already exists.");
            $exists = true;
        }

        // If files exist, stop execution
        if ($exists) {
            return;
        }

        // Ensure directories exist
        $this->makeDirectory($interfacePath);
        $this->makeDirectory($repositoryPath);

        // Create interface and repository
        $this->createInterface($name, $interfacePath);
        $this->createRepository($name, $repositoryPath);

        // Register repository in RepositoryRegisterProvider
        $this->updateRepositoryProvider($name, $providerPath);

        // Success messages
        $this->infoFormatted("Interface [{$interfacePath}] created successfully.");
        $this->infoFormatted("Repository [{$repositoryPath}] created successfully.");
        $this->infoFormatted("Repository Registration provider updated successfully.");
    }

    protected function makeDirectory($path): void
    {
        $directory = dirname($path);
        if (!$this->files->exists($directory)) {
            $this->files->makeDirectory($directory, 0777, true, true);
        }
    }

    protected function createInterface($name, $path): void
    {
        $stub = <<<PHP
<?php

namespace App\Repositories\Contracts;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

interface {$name}RepositoryInterface
{
    public function getDataTableData(Request \$request): LengthAwarePaginator;
}
PHP;
        $this->files->put($path, $stub);
    }

    protected function createRepository($name, $path): void
    {
        $name = str($name)->camel()->ucfirst()->toString();
        $stub = <<<PHP
<?php

namespace App\Repositories;

use App\Repositories\Contracts\\{$name}RepositoryInterface;

use App\Filters\\{$name}Filter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Repositories\Traits\CacheableRepositoryTrait;
use App\Repositories\Traits\BaseRepositoryTrait;
use App\Repositories\Traits\BulkDeletesRepositoryTrait;
use App\Repositories\Traits\SoftDeletesRepositoryTrait;
use App\Repositories\Traits\OptionalRepositoryTrait;

class {$name}Repository implements {$name}RepositoryInterface
{
    use CacheableRepositoryTrait, BaseRepositoryTrait, BulkDeletesRepositoryTrait, SoftDeletesRepositoryTrait, OptionalRepositoryTrait;

    protected {$name}Filter \$filter;

    public function __construct({$name}Filter \$filter)
    {
        \$this->filter = \$filter;
    }

    protected function getModel(): Model
    {
        // return new model();
    }

    public function getDataTableData(Request \$request): LengthAwarePaginator
    {
        // Implement the logic to retrieve data for the data table
    }
}
PHP;
        $this->files->put($path, $stub);
    }

    protected function updateRepositoryProvider($name, $providerPath)
    {
        $interface = "{$name}RepositoryInterface";
        $repository = "{$name}Repository";

        // Check if the provider file exists
        if (!$this->files->exists($providerPath)) {
            $this->errorFormatted("RepositoryRegisterProvider.php not found.");
            return;
        }

        // Read the existing provider file
        $content = $this->files->get($providerPath);

        // Check if the repository is already registered
        if (strpos($content, "use App\Repositories\Contracts\\{$interface};") !== false) {
            return; // Already registered, no need to update
        }

        // Append the use statements at the correct place
        $useStatement = "use App\Repositories\\{$repository};\nuse App\Repositories\Contracts\\{$interface};";
        $content = preg_replace('/namespace App\\\Providers;\n\n/', "namespace App\\Providers;\n\n{$useStatement}\n\n", $content, 1);

        // Append the binding in the register() method
        $bindingStatement = "\n        \$this->app->singleton({$interface}::class, {$repository}::class);";
        $content = preg_replace('/public function register\(\): void\n\s*\{\n/', "public function register(): void\n    {\n        {$bindingStatement}", $content, 1);

        // Save the modified provider file
        $this->files->put($providerPath, $content);
    }

    protected function infoFormatted($message): void
    {
        $this->line("  \033[100;37m INFO \033[0m  {$message}"); // Gray background, white text
    }

    protected function errorFormatted($message): void
    {
        $this->line("  \033[41;37m ERROR \033[0m  {$message}"); // Red background, white text
    }
}
