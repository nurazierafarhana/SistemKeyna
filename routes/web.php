<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\FoodController;


Route::get('/', [LandingPageController::class, 'index']);


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


Route::middleware('auth')->group(function () {
Route::get('/foods', [FoodController::class, 'index'])->name('food.index');
Route::get('/foods/filter/{type}', [FoodController::class, 'filter'])->name('food.filter');
Route::get('/foods/sort/{type}', [FoodController::class, 'sortByPrice'])->name('food.sort');
Route::get('/foods/admin', [FoodController::class, 'adminIndex'])->name('food.admin');
Route::get('/foods/{id}', [FoodController::class, 'show'])->name('food.show');
Route::get('/foods/edit/{id}', [FoodController::class, 'getForUpdate'])->name('food.edit');
Route::post('/foods', [FoodController::class, 'create'])->name('food.create');
Route::put('/foods/{id}', [FoodController::class, 'update'])->name('food.update');
Route::delete('/foods/{id}', [FoodController::class, 'destroy'])->name('food.destroy');
});

// // ==============================
// // ADMIN CONTROLLER
// // ================================


use App\Http\Controllers\AdminController;

Route::get('/admin-login', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin-login', [AdminController::class, 'login'])->name('admin.login.post');
Route::get('/admin-dashboard', [AdminController::class, 'dashboard'])->name('dashboardadmin');
