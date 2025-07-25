<?php

namespace App\Utils;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Throwable;

class ExceptionHandler
{
    /**
     * Handle the execution of a callback with standardized exception handling and optional transactions.
     *
     * @param callable $callback The logic to execute.
     * @param callable|null $customResponse Optional custom response handler for exceptions.
     * @param bool $useTransaction Whether to use database transactions.
     * @return mixed
     */
    public static function handle(callable $callback, $fallbackValue  = null, bool $useTransaction = false)
    {
        if ($useTransaction) {
            DB::beginTransaction();
        }

        try {
            $result = $callback();

            if ($useTransaction) {
                DB::commit();
            }

            return $result;
        } catch (Throwable $exception) {
            if ($useTransaction) {
                DB::rollBack();
            }

            self::logException($exception);


            // Return the fallback value instead of throwing the exception
            return $fallbackValue;
        }
    }

    /**
     * Log the exception details in a standardized format.
     *
     * @param Throwable $exception
     * @return void
     */
    protected static function logException(Throwable $exception): void
    {
        $logData = [
            'Message' => $exception->getMessage(),
            'Code' => $exception->getCode(),
            'File' => $exception->getFile() . ':' . $exception->getLine(),
            'Request Info' => self::getRequestInfo(),
            'Trace' => $exception->getTraceAsString(),
        ];

        Log::error(json_encode($logData, JSON_PRETTY_PRINT));
    }

    /**
     * Get request-related information for logging.
     *
     * @return array
     */
    protected static function getRequestInfo(): array
    {
        $request = request();

        return [
            'URL' => $request->fullUrl(),
            'Method' => $request->method(),
            'Input' => self::sanitizeInput($request->except(['password', 'password_confirmation'])),
            'User' => optional($request->user())->only(['id', 'email']),
        ];
    }

    /**
     * Sanitize input data to remove sensitive or large values.
     *
     * @param array $input
     * @return array
     */
    protected static function sanitizeInput(array $input): array
    {
        return array_map(function ($value) {
            return is_string($value) && strlen($value) > 200 ? substr($value, 0, 200) . '...' : $value;
        }, $input);
    }
}
