<?php

namespace App\Traits;

use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Models\Activity;


trait AutoLogsActivity
{
    use LogsActivity;

    /**
     * Automatically configure the activity log options.
     */
    public function getActivitylogOptions(): LogOptions
    {
        // If model defines a $logAttributes property, use that
        if (property_exists($this, 'logAttributes') && !empty($this->logAttributes)) {
            $attributesToLog = $this->logAttributes;
        }
        // Else fallback to all current attributes
        else {
            $attributesToLog = array_keys($this->attributesToArray());
        }

        return LogOptions::defaults()
            ->logOnly($attributesToLog)
            ->logOnlyDirty()
            ->dontSubmitEmptyLogs()
            ->useLogName($this->getLogName())
            ->setDescriptionForEvent(function (string $eventName) {
                // Allow custom description from model method
                if (method_exists($this, 'getCustomLogDescription')) {
                    return $this->getCustomLogDescription($eventName);
                }

                return $this->getLogName() . " {$eventName}";
            });
    }


    /**
     * Return the log name. Defaults to the model class basename.
     */
    protected function getLogName(): string
    {
        return class_basename(static::class);
    }

    public function tapActivity(Activity $activity, string $eventName)
    {
        if (!$activity->causer_id) {
            $user = getCurrentAuthenticatedUser();
            if ($user) {
                $activity->causer_type = get_class($user);
                $activity->causer_id = $user->getKey();
            }
        }
    }
}
