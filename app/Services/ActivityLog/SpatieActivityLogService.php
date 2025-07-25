<?php

namespace App\Services\ActivityLog;

use Jenssegers\Agent\Agent;

class SpatieActivityLogService implements Contracts\ActivityLogServiceInterface
{

    public function log(string $message, array $properties = [], ?string $logName = null, $causer = null): void
    {
        activity($logName ?? 'default')
            ->causedBy($causer ?? auth()->user())
            ->withProperties(array_merge($properties, $this->getRequestMetadata()))
            ->log($message);
    }

    protected function getRequestMetadata(): array
    {
        $agent = new Agent();

        return [
            'ip' => request()->ip(),
            'browser' => $agent->browser(),
            'browser_version' => $agent->version($agent->browser()),
            'platform' => $agent->platform(),
            'platform_version' => $agent->version($agent->platform()),
            'device' => $agent->device(),
            'is_mobile' => $agent->isMobile(),
            'user_agent' => request()->header('User-Agent'),
            'url' => request()->fullUrl(),
            'method' => request()->method(),
        ];
    }
}
