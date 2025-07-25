<?php

namespace App\Services\Dropdowns\Contracts;

interface DropdownFactoryInterface
{
    public function getDropdown(string $type, array $filters = []): array;
}
