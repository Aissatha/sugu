<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\UserController as AdminUserController; // Renommer l'import pour éviter le conflit
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\BoutiqueController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ShopRequestController;







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
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/create', [AdminController::class, 'create'])->name('create');
    //Route::get('/dashboard', [AdminController::class, 'index'])->name('index');
    //Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    //Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/', [UserController::class, 'index'])->name('index');






});


/*Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::resource('users', UserController::class)->middleware('isAdmin'); // Applique le middleware à la ressource
});*/

//Route::middleware(['auth', 'role:admin'])->group(function () {
    //Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
//});


/*Route::prefix('admin')->name('admin.')->middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('index'); // Définir la route admin.index
    Route::get('/create', [AdminController::class, 'create'])->name('create'); // Route admin.create

});*/


Route::post('/login', [AuthenticatedSessionController::class, 'store'])
    ->middleware(['web', 'guest'])
    ->name('login');

Route::middleware(['auth', 'role:admin'])->prefix('admin/boutiques')->name('admin.boutiques.')->group(function () {
    Route::get('/', [BoutiqueController::class, 'index'])->name('index'); // liste boutiques
    Route::get('/demandes', [BoutiqueController::class, 'demandes'])->name('demandes'); // demandes en attente
    Route::get('/{id}', [BoutiqueController::class, 'show'])->name('show'); // détail boutique
    Route::post('/{id}/approve', [BoutiqueController::class, 'approve'])->name('approve');
    Route::post('/{id}/reject', [BoutiqueController::class, 'reject'])->name('reject');
    Route::post('/{id}/disable', [BoutiqueController::class, 'disable'])->name('disable');
    Route::post('/{id}/enable', [BoutiqueController::class, 'enable'])->name('enable');
    Route::post('/{id}/alert', [BoutiqueController::class, 'alert'])->name('alert');
    Route::delete('/{id}', [BoutiqueController::class, 'destroy'])->name('destroy');
});


Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::resource('shops', ShopController::class);
});
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('shop-requests', [ShopRequestController::class, 'index'])->name('shop-requests.index');
    Route::get('shop-requests/{shopRequest}', [ShopRequestController::class, 'show'])->name('shop-requests.show');
    Route::post('shop-requests/{shopRequest}/approve', [ShopRequestController::class, 'approve'])->name('shop-requests.approve');
    Route::post('shop-requests/{shopRequest}/reject', [ShopRequestController::class, 'reject'])->name('shop-requests.reject');
    Route::delete('shop-requests/{shopRequest}', [ShopRequestController::class, 'destroy'])->name('shop-requests.destroy');
});
