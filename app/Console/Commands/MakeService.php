<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;

class MakeService extends Command
{
    protected $signature = 'make:service {name}';
    protected $description = 'Create a new service and its corresponding interface';

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
        $interfacePath = app_path("Services/Contracts/{$name}ServiceInterface.php");
        $servicePath = app_path("Services/{$name}Service.php");
        $providerPath = app_path("Providers/ServiceRegistryProvider.php");

        // Check if files already exist
        $exists = false;

        if ($this->files->exists($interfacePath)) {
            $this->errorFormatted("Service interface already exists.");
            $exists = true;
        }
        if ($this->files->exists($servicePath)) {
            $this->errorFormatted("Service already exists.");
            $exists = true;
        }

        // If files exist, stop execution
        if ($exists) {
            return;
        }

        // Ensure directories exist
        $this->makeDirectory($interfacePath);
        $this->makeDirectory($servicePath);

        // Create interface and service
        $this->createInterface($name, $interfacePath);
        $this->createService($name, $servicePath);

        // Register service in ServiceRegistryProvider
        $this->updateServiceProvider($name, $providerPath);

        // Success messages
        $this->infoFormatted("Service Interface [{$interfacePath}] created successfully.");
        $this->infoFormatted("Service [{$servicePath}] created successfully.");
        $this->infoFormatted("Service Registration provider updated successfully.");
    }

    protected function makeDirectory($path)
    {
        $directory = dirname($path);
        if (!$this->files->exists($directory)) {
            $this->files->makeDirectory($directory, 0777, true, true);
        }
    }

    protected function createInterface($name, $path)
    {
        $namePlural = str($name)->ucfirst()->plural();
        $nameCamel = str($name)->camel();

        $stub = <<<PHP
<?php

namespace App\Services\Contracts;

use App\Models\\{$name};
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection as DatabaseCollection;
use Illuminate\Support\Collection;

interface {$name}ServiceInterface
{
    public function getAll{$namePlural}(): LengthAwarePaginator|DatabaseCollection|Collection;

    public function getDataTable(Request \$request): array;

    public function get{$name}ById(mixed \$id): ?{$name};

    public function store{$name}(array \$data): ?{$name};

    public function update{$name}({$name} \${$nameCamel}, array \$data): {$name};

    public function delete{$name}({$name} \${$nameCamel}): bool;

    public function deleteBulk{$namePlural}(array \$ids): bool;
}
PHP;
        $this->files->put($path, $stub);
    }

    protected function createService($name, $path)
    {
        $namePlural = str($name)->ucfirst()->plural();
        $nameCamel = str($name)->camel();

        $stub = <<<PHP
<?php

namespace App\Services;

use App\Repositories\Contracts\\{$name}RepositoryInterface;
use App\Services\Contracts\\{$name}ServiceInterface;
use App\Models\\{$name};
use App\Services\Traits\BaseServiceTrait;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection as DatabaseCollection;
use Illuminate\Support\Collection;

class {$name}Service implements {$name}ServiceInterface
{
    use BaseServiceTrait;

    protected {$name}RepositoryInterface \$repository;

    public function __construct({$name}RepositoryInterface \$repository)
    {
        \$this->repository = \$repository;
    }

    // Implement service methods
    public function getAll{$namePlural}(): LengthAwarePaginator|DatabaseCollection|Collection
    {
        // TODO: Implement getAll{$namePlural}() method.
    }

    public function get{$name}ById(mixed \$id): ?{$name}
    {
        // TODO: Implement get{$name}ById() method.
    }

    public function store{$name}(array \$data): ?{$name}
    {
        // TODO: Implement store{$name}() method.
    }

    public function update{$name}({$name} \${$nameCamel}, array \$data): {$name}
    {
        // TODO: Implement update{$name}() method.
    }

    public function delete{$name}({$name} \${$nameCamel}): bool
    {
        // TODO: Implement delete{$name}() method.
    }

    public function deleteBulk{$namePlural}(array \$ids): bool
    {
        // TODO: Implement deleteBulk{$namePlural}() method.
    }
}
PHP;
        $this->files->put($path, $stub);
    }

    protected function updateServiceProvider($name, $providerPath)
    {
        $interface = "{$name}ServiceInterface";
        $service = "{$name}Service";

        // Check if the provider file exists
        if (!$this->files->exists($providerPath)) {
            $this->errorFormatted("ServiceRegistryProvider.php not found.");
            return;
        }

        // Read the existing provider file
        $content = $this->files->get($providerPath);

        // Check if the service is already registered
        if (strpos($content, "use App\Services\Contracts\\{$interface};") !== false) {
            return; // Already registered, no need to update
        }

        // Append the use statements at the correct place
        $useStatement = "use App\Services\\{$service};\nuse App\Services\Contracts\\{$interface};";
        $content = preg_replace('/namespace App\\\Providers;\n\n/', "namespace App\\Providers;\n\n{$useStatement}\n\n", $content, 1);

        // Append the binding in the register() method
        $bindingStatement = "\n        \$this->app->singleton({$interface}::class, {$service}::class);";
        $content = preg_replace('/public function register\(\): void\n\s*\{\n/', "public function register(): void\n    {\n        {$bindingStatement}", $content, 1);

        // Save the modified provider file
        $this->files->put($providerPath, $content);
    }

    protected function infoFormatted($message): void
    {
        $this->line("  \033[100;37m INFO \033[0m  {$message}"); // Gray background, white text
    }

    protected function errorFormatted($message)
    {
        $this->line("  \033[41;37m ERROR \033[0m  {$message}"); // Red background, white text
    }
}
