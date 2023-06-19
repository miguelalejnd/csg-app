<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserPasswordController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome.welcome');
})->name('welcome.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// users
Route::resource('usuarios', UserController::class);
Route::put('usuarios/{id}/password', [UserPasswordController::class, 'update'])->name('users.password');

// sales
Route::middleware('auth', 'verified')->group(function () {
    Route::get('/ventas', function () {
        return view('sales.index');
    })->name('sales.index');
});

// purchases
Route::middleware('auth', 'verified')->group(function () {
    Route::get('/compras', function () {
        return view('purchases.index');
    })->name('purchases.index');
});

// visites
Route::middleware('auth', 'verified')->group(function () {
    Route::get('/visitas', function () {
        return view('visites.index');
    })->name('visites.index');
});

// inventary
Route::middleware('auth', 'verified')->group(function () {
    Route::get('/inventario', function () {
        return view('inventary.index');
    })->name('inventary.index');
});

// profile settings
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
