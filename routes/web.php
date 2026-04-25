<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/fashion', [PageController::class, 'fashion'])->name('fashion');
Route::get('/electronics', [PageController::class, 'electronics'])->name('electronics');
Route::get('/sports', [PageController::class, 'sports'])->name('sports');
Route::get('/books', [PageController::class, 'books'])->name('books');
Route::get('/deals', [PageController::class, 'deals'])->name('deals');

require __DIR__.'/settings.php';