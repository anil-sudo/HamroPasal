<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/fashion', [PageController::class, 'fashion'])->name('fashion');
Route::get('/electronics', [PageController::class, 'electronics'])->name('electronics');
Route::get('/sports', [PageController::class, 'sports'])->name('sports');
Route::get('/books', [PageController::class, 'books'])->name('books');
Route::get('/deals', [PageController::class, 'deals'])->name('deals');


Route::get('/fashion/men', [PageController::class, 'menFashion'])->name('fashion.men');
Route::get('/fashion/women', [PageController::class, 'womenFashion'])->name('fashion.women');
Route::get('/fashion/kids', [PageController::class, 'kidsFashion'])->name('fashion.kids');
Route::get('/fashion/accessories', [PageController::class, 'accessoriesFashion'])->name('fashion.accessories');


Route::get('/fashion/men/shirts', [PageController::class, 'menShirts'])->name('fashion.men.shirts');

require __DIR__.'/settings.php';