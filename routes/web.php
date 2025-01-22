<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;

Route::get('/', [LandingPageController::class, 'index']);


use App\Http\Controllers\FoodController;

Route::get('/dashboard', [FoodController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// =============================
// About Route
// =============================
Route::get('/about', [AboutController::class, 'index'])->name('about');

// =============================
// product Route
// =============================
Route::get('/products', [ProductController::class, 'showProducts'])->name('products.index');



Route::get('/foods', [FoodController::class, 'index'])->name('foods.index');
Route::get('/foods/filter/{type}', [FoodController::class, 'filter'])->name('foods.filter');
Route::get('/foods/sort/{type}', [FoodController::class, 'sortByPrice'])->name('foods.sort');
Route::get('/foods/admin', [FoodController::class, 'adminIndex'])->name('foods.admin');
Route::get('/foods/{id}', [FoodController::class, 'show'])->name('foods.show');
Route::get('/foods/edit/{id}', [FoodController::class, 'getForUpdate'])->name('foods.edit');
Route::post('/foods', [FoodController::class, 'create'])->name('foods.create');
Route::put('/foods/{id}', [FoodController::class, 'update'])->name('foods.update');
Route::delete('/foods/{id}', [FoodController::class, 'destroy'])->name('foods.destroy');
