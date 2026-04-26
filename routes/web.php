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



Route::get('/electronics/mobile', [PageController::class, 'mobile'])->name('electronics.mobile');
Route::get('/electronics/laptop', [PageController::class, 'laptop'])->name('electronics.laptop');
Route::get('/electronics/audio', [PageController::class, 'audio'])->name('electronics.audio');
Route::get('/electronics/accessories', [PageController::class, 'electronicsAccessories'])->name('electronics.accessories');


Route::get('/sports/football', [PageController::class, 'football'])->name('sports.football');
Route::get('/sports/cricket', [PageController::class, 'cricket'])->name('sports.cricket');
Route::get('/sports/running', [PageController::class, 'running'])->name('sports.running');
Route::get('/sports/gym', [PageController::class, 'gym'])->name('sports.gym');Route::get('/books/fiction', [PageController::class, 'fiction'])->name('books.fiction');

Route::get('/books/fiction', [PageController::class, 'fiction'])->name('books.fiction');
Route::get('/books/education', [PageController::class, 'education'])->name('books.education');
Route::get('/books/business', [PageController::class, 'business'])->name('books.business');
Route::get('/books/self-help', [PageController::class, 'selfHelp'])->name('books.selfhelp');


require __DIR__.'/settings.php';