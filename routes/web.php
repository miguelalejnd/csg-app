<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

// accounting
Route::middleware('auth', 'verified')->group(function () {
    Route::get('/contabilidad', function () {
        return view('accounting.index');
    })->name('accounting.index');
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

// users
Route::middleware('auth')->group(function () {
    Route::get('/users', [UserController::class, 'index'])->middleware('auth')->name('user.index');
    Route::get('/users/create', [UserController::class, 'create'])->middleware('auth')->name('user.create');
    
});

require __DIR__.'/auth.php';
