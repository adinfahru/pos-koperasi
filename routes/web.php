<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\TransactionDetailController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\ProfitController;
use App\Http\Controllers\RecapController;
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
    Route::get('transaction/{id}', 'TransactionController@show')->name('transaction.show');
    Route::post('/transaction/detail/create', [TransactionDetailController::class, 'create'])->name('transaction.detail.create');
    Route::get('/transaction/detail/delete', [TransactionDetailController::class, 'delete'])->name('transaction.detail.delete');
    Route::post('/transaction/detail/selesai/{id}', [TransactionDetailController::class, 'done']);
    Route::get('transaction/reduce-stock/{productId}/{qty}', [TransactionController::class, 'reduceStock'])->name('transaction.reduce-stock');
    Route::get('/transactions/filter', [TransactionController::class, 'filter'])->name('transactions.filter');

    Route::get('/manager/profit', [ProfitController::class, 'index'])->name('manager.profit');
    Route::get('/rekap/index', [RecapController::class, 'index'])->name('rekap.index');
    Route::get('/manager/stock', [StockController::class, 'lowStock'])->name('manager.stock');
});

Route::get('/anggota/dashboard', [AnggotaController::class, 'index'])->name('anggota.dashboard');
Route::get('/anggota/history', [AnggotaController::class, 'history'])->name('anggota.history');
Route::get('/anggota/history/{id}', [AnggotaController::class, 'show'])->name('anggota.show');
Route::get('/anggota/shu', [AnggotaController::class, 'shu'])->name('anggota.shu');



require __DIR__ . '/auth.php';
