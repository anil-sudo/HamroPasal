<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');

// SHOW FORM
Route::get('/dokan-registration', [PageController::class, 'dokanForm'])
    ->name('dokan_registration.form');

// SUBMIT FORM
Route::post('/dokan-registration', [PageController::class, 'dokan_registration'])
    ->name('dokan_registration');

require __DIR__.'/settings.php';