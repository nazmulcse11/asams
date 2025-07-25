<?php

namespace App\Providers;

use App\Services\Dropdowns\Contracts\DropdownFactoryInterface;
use App\Services\Dropdowns\DropdownFactory;
use Illuminate\Support\ServiceProvider;

class FactoryRegisterProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(DropdownFactoryInterface::class, DropdownFactory::class);
    }
}
