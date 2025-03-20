<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\UserController as AdminUserController; // Renommer l'import pour éviter le conflit



Route::get('/', function () {
    return view('welcome');
});

Route::get('/stores', function () {
    return view('stores.store');

});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/vendors', [VendorController::class, 'index'])->name('vendors.list');
});

Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
});

Route::middleware(['auth', 'role:vendor'])->group(function () {
    Route::get('/vendor/dashboard', [VendorController::class, 'index'])->name('vendor.dashboard');
});

Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/user/dashboard', [UserController::class, 'index'])->name('user.dashboard');
});

Route::prefix('admin')->name('admin.')->middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('users', UserController::class);
    Route::get('users/historique', [UserController::class, 'historique'])->name('users.historique');
    Route::post('users/block/{user}', [UserController::class, 'block'])->name('users.block');
    Route::delete('users/delete/{user}', [UserController::class, 'delete'])->name('users.delete');
});


//Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::resource('users', UserController::class)->middleware('isAdmin'); // Applique le middleware à la ressource
//});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});



