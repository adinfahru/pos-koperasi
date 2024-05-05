<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransactionDetailController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::view('about', 'about')->name('about');

    Route::get('users', [UserController::class, 'index'])->name('users.index')->middleware(['auth']);;
    Route::resource('users', UserController::class)->middleware(['auth']);;;

    Route::get('admin', [AdminController::class, 'index'])->name('admin.index')->middleware(['auth']);;;

    Route::resource('products', ProductsController::class)->middleware(['auth']);;;

    Route::resource('transaction', TransactionController::class);
    Route::post('/transaction/detail/create', [TransactionDetailController::class, 'create'])->name('transaction.detail.create');

});

require __DIR__ . '/auth.php';

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('admin/index', [AdminController::class, 'index']);
});
