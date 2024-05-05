<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PosController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShuController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('shu', ShuController::class)->middleware(['auth']);;;


Route::middleware(['auth', 'admin'])->group(function () {
    Route::view('about', 'about')->name('about');

    Route::get('users', [UserController::class, 'index'])->name('users.index')->middleware(['auth']);;

    Route::get('admin', [AdminController::class, 'index'])->name('admin.index')->middleware(['auth']);;;

    Route::resource('products', ProductsController::class)->middleware(['auth']);;;

    Route::resource('pos', PosController::class)->middleware(['auth']);;;

    Route::get('/pos/add-to-cart/{productId}', [PosController::class, 'addToCart'])->name('pos.addToCart'); 


    Route::resource('users', UserController::class)->middleware(['auth']);;;

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('admin/index', [AdminController::class, 'index']);
});
