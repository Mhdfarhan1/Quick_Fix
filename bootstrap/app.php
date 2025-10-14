<?php

use Illuminate\Filesystem\Filesystem;
use Illuminate\Foundation\Application;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(fn($middleware) => $middleware->alias([
        'is_admin' => App\Http\Middleware\AdminMiddleware::class,
    ]))
    ->withBindings([
        'files' => fn() => new Filesystem(), // ✅ wajib
    ])
    ->withProviders([
        Laravel\Sanctum\SanctumServiceProvider::class,
    ])
    ->create();
