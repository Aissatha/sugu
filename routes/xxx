<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\BoutiqueController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ShopRequestController;
use App\Http\Controllers\Vendor\ProductController as VendorProductController;
use App\Http\Controllers\Vendor\OrderController;
use App\Http\Controllers\Vendor\ChatController;


// Page d'accueil
Route::get('/', fn () => view('welcome'));

// Page vitrine
Route::get('/stores', fn () => view('stores.store'));

// Dashboard général (Jetstream)
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', fn () => view('dashboard'))->name('dashboard');
});

// ===== ADMIN =====
Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

    Route::get('/vendors', [VendorController::class, 'index'])->name('vendors.list');

    Route::resource('users', UserController::class);
    Route::get('users/historique', [UserController::class, 'historique'])->name('users.historique');
    Route::post('users/block/{user}', [UserController::class, 'block'])->name('users.block');
    Route::delete('users/delete/{user}', [UserController::class, 'delete'])->name('users.delete');

    Route::resource('shops', ShopController::class);
    Route::get('shop-requests', [ShopRequestController::class, 'index'])->name('shop-requests.index');
    Route::get('shop-requests/{shopRequest}', [ShopRequestController::class, 'show'])->name('shop-requests.show');
    Route::post('shop-requests/{shopRequest}/approve', [ShopRequestController::class, 'approve'])->name('shop-requests.approve');
    Route::post('shop-requests/{shopRequest}/reject', [ShopRequestController::class, 'reject'])->name('shop-requests.reject');
    Route::delete('shop-requests/{shopRequest}', [ShopRequestController::class, 'destroy'])->name('shop-requests.destroy');

    Route::prefix('boutiques')->name('boutiques.')->group(function () {
        Route::get('/', [BoutiqueController::class, 'index'])->name('index');
        Route::get('/demandes', [BoutiqueController::class, 'demandes'])->name('demandes');
        Route::get('/{id}', [BoutiqueController::class, 'show'])->name('show');
        Route::post('/{id}/approve', [BoutiqueController::class, 'approve'])->name('approve');
        Route::post('/{id}/reject', [BoutiqueController::class, 'reject'])->name('reject');
        Route::post('/{id}/disable', [BoutiqueController::class, 'disable'])->name('disable');
        Route::post('/{id}/enable', [BoutiqueController::class, 'enable'])->name('enable');
        Route::post('/{id}/alert', [BoutiqueController::class, 'alert'])->name('alert');
        Route::delete('/{id}', [BoutiqueController::class, 'destroy'])->name('destroy');
    });
});

// ===== VENDEUR =====
Route::middleware(['auth', 'role:vendor'])->prefix('vendor')->name('vendor.')->group(function () {
    Route::get('/dashboard', [VendorController::class, 'index'])->name('dashboard');

    Route::resource('products', VendorProductController::class);

    // Stock
    Route::get('products/{id}/edit-stock', [VendorProductController::class, 'editStock'])->name('products.editStock');
    Route::post('products/{id}/update-stock', [VendorProductController::class, 'updateStock'])->name('products.updateStock');

    // Commandes
    Route::get('orders', [OrderController::class, 'index'])->name('orders.index');
    Route::get('orders/{id}', [OrderController::class, 'show'])->name('orders.show');
    Route::post('orders/{id}/update-status', [OrderController::class, 'updateStatus'])->name('orders.updateStatus');
    Route::get('orders/{id}/invoice', [OrderController::class, 'downloadInvoice'])->name('orders.invoice');

    // Messagerie vendeur → client
    Route::get('chat/client/{clientId}', [ChatController::class, 'chatWithClient'])->name('chat.withClient');
    Route::post('/chat/client/{clientId}/send', [ChatController::class, 'sendMessage'])->name('chat.sendMessage');
    Route::get('/chat/client/{clientId}/messages', [ChatController::class, 'fetchMessages'])->name('chat.fetchMessages');


});

// ===== UTILISATEUR SIMPLE =====
Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/user/dashboard', [UserController::class, 'index'])->name('user.dashboard');
});

// ===== AUTHENTIFICATION (Jetstream) =====
Route::post('/login', [AuthenticatedSessionController::class, 'store'])
    ->middleware(['web', 'guest'])
    ->name('login');

