<?php

namespace App\Services\ActivityLog\Contracts;

interface ActivityLogServiceInterface
{
    public function log(string $message, array $properties = [], ?string $logName = null, $causer = null): void;
}
