<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias(aliases: [
            'admin' => \App\Http\Middleware\AdminMiddleware::class,
            'employee' => \App\Http\Middleware\EmployeeMiddleware::class,
            'agent' => \App\Http\Middleware\AgentMiddleware::class,
            'buyer' => \App\Http\Middleware\BuyerMiddleware::class,
            'any.auth' => \App\Http\Middleware\AnyAuth::class,
            'resolve.user' => \App\Http\Middleware\MultiGuardAuthResolver::class
        ]);
        $middleware->append(\App\Http\Middleware\MultiGuardAuthResolver::class);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
