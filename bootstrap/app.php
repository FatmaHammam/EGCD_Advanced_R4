<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\CheckAge;
use App\Http\Middleware\isAdmin;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
    })

    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias(['checkAge' => CheckAge::class]);
    })

    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias(['isAdmin' => isAdmin::class]);
    })

    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
