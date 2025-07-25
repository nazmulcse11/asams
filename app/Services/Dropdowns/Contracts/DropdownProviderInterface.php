<?php

namespace App\Services\Dropdowns\Contracts;

interface DropdownProviderInterface
{
    public function getOptions(array $filters = []): array;
}
