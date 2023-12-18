<?php

use Barryvdh\DomPDF\PDF;
use App\Models\Pendaftaran;
use App\Livewire\Pages\Users\View;
use Illuminate\Support\Facades\Route;
use App\Livewire\Pages\Pendaftar\Show;
use App\Http\Controllers\UsersController;

Route::view('/', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::middlewareGroup('admin', ['auth', 'verified', 'can:accessAdminPanel'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::get('users', [UsersController::class, 'index'])->name('users');

        Route::view('pendaftar', 'pendaftar.index')->name('pendaftar');
        Route::get('pendaftar/{id}', Show::class)->name('pendaftar.show');
    });

Route::middlewareGroup('user', ['auth', 'verified'])
    ->prefix('user')
    ->group(function () {
        Route::view('pendaftaran', 'pendaftaran.index')->name('pendaftaran');
    });


require __DIR__ . '/auth.php';
