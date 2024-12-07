<?php

use App\Http\Controllers\Admin\CategoryCoffeeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\PromoController;
use App\Http\Controllers\IgPostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CoffeeController;

Route::get('/', [UserController::class, 'index']);
Route::get('category/{categoryId}', [UserController::class,'coffee']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/admin/dashboard', [AdminController::class, 'index']);
    Route::get('/admin/category/{id}', [CategoryCoffeeController::class, 'index']);

    Route::get('/admin/promo/edit/{id}', [PromoController::class, 'edit']);
    Route::post('/admin/promo/update/{id}', [PromoController::class, 'update']);
    Route::post('/admin/promo', [PromoController::class, 'store']);
    Route::delete('/admin/promo/{promoId}', [PromoController::class, 'destroy']);

    Route::post('/admin/ig-post', [IgPostController::class, 'store']);
    Route::delete('/admin/ig-post/{id}', [IgPostController::class, 'destroy']);
    Route::get('/admin/ig-post/edit/{id}', [IgPostController::class, 'edit']);
    Route::post('/admin/ig-post/update/{id}', [IgPostController::class, 'update']);

    Route::post('/admin/coffee/{categoryCoffeeId}', [CoffeeController::class, 'store']);
    Route::get('/admin/coffee/edit/{id}', [CoffeeController::class, 'edit']);
    Route::post('/admin/coffee/update/{id}', [CoffeeController::class, 'update']);
    Route::delete('/admin/coffee/{id}', [CoffeeController::class, 'destroy']);
});


require __DIR__.'/auth.php';
