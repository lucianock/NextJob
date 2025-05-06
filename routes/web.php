<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TagController;

$prefix = env('APP_PREFIX', '');

Route::prefix($prefix)->group(function () {

    // Home / Listado de jobs
    Route::get('/', [JobController::class, 'index'])
        ->name('index');

    // Jobs
    Route::get('/jobs/create', [JobController::class, 'create'])
        ->middleware('auth')
        ->name('jobs.create');
    Route::post('/jobs', [JobController::class, 'store'])
        ->middleware('auth')
        ->name('jobs.store');

    // Search
    Route::get('/search', SearchController::class)
        ->name('search');

    // Tags
    Route::get('/tags/{tag:name}', TagController::class)
        ->name('tags.show');

    // Auth: registro y login para invitados
    Route::middleware('guest')->group(function () {
        // Mostrar formulario de registro
        Route::get('/register', [RegisteredUserController::class, 'create'])
            ->name('register');
        // Procesar envío de registro
        Route::post('/register', [RegisteredUserController::class, 'store'])
            ->name('register.store');

        // Mostrar login y procesar login
        Route::get('/login', [SessionController::class, 'create'])
            ->name('login');
        Route::post('/login', [SessionController::class, 'store'])
            ->name('login.store');
    });

    // Logout
    Route::delete('/logout', [SessionController::class, 'destroy'])
        ->middleware('auth')
        ->name('logout');
});
