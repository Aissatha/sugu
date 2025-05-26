<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\BoutiqueController;
use App\Http\Controllers\Vendor\ShopController;
use App\Http\Controllers\ShopRequestController;
use App\Http\Controllers\Vendor\ProductController as VendorProductController;
use App\Http\Controllers\Vendor\ChatController;
use App\Http\Controllers\Vendor\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\VariantController;
use App\Http\Controllers\Vendor\ShopController as VendorShopController; // Pour vendeur


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
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

    // Utilisateurs
    Route::resource('users', UserController::class);
    Route::get('users/historique', [UserController::class, 'historique'])->name('users.historique');
    Route::post('users/block/{user}', [UserController::class, 'block'])->name('users.block');
    Route::delete('users/delete/{user}', [UserController::class, 'delete'])->name('users.delete');

    // Produits
    Route::resource('products', ProductController::class)->names('products');
    Route::put('products/{product}/status/{status}', [ProductController::class, 'updateStatus'])->name('products.updateStatus');
    Route::put('products/{product}/toggle-status', [ProductController::class, 'toggleStatus'])->name('products.toggleStatus');

    // Variantes
    Route::get('products/{product}/variants', [VariantController::class, 'index'])->name('variants.index');
    Route::get('products/{product}/variants/create', [VariantController::class, 'create'])->name('variants.create');
    Route::post('products/{product}/variants', [VariantController::class, 'store'])->name('variants.store');
    Route::get('products/{product}/variants/{variant}/edit', [VariantController::class, 'edit'])->name('variants.edit');
    Route::put('products/{product}/variants/{variant}', [VariantController::class, 'update'])->name('variants.update');
    Route::delete('products/{product}/variants/{variant}', [VariantController::class, 'destroy'])->name('variants.destroy');

    // Page d'accueil admin
    Route::get('/', [UserController::class, 'index'])->name('index');
    Route::get('/create', [AdminController::class, 'create'])->name('create');

    // Shops côté admin
    Route::get('/shops', [\App\Http\Controllers\Admin\ShopController::class, 'index'])->name('shops.index');
    Route::get('/shops/{shop}', [\App\Http\Controllers\Admin\ShopController::class, 'show'])->name('shops.show');
    Route::post('/shops/{shop}/validate', [\App\Http\Controllers\Admin\ShopController::class, 'validateShop'])->name('shops.validate');
    Route::post('/shops/{shop}/refuse', [\App\Http\Controllers\Admin\ShopController::class, 'refuseShop'])->name('shops.refuse');

    // Shops - autres gestion
    Route::resource('shops', ShopController::class);
    Route::get('shop-requests', [ShopRequestController::class, 'index'])->name('shop-requests.index');
    Route::get('shop-requests/{shopRequest}', [ShopRequestController::class, 'show'])->name('shop-requests.show');
    Route::post('shop-requests/{shopRequest}/approve', [ShopRequestController::class, 'approve'])->name('shop-requests.approve');
    Route::post('shop-requests/{shopRequest}/reject', [ShopRequestController::class, 'reject'])->name('shop-requests.reject');
    Route::delete('shop-requests/{shopRequest}', [ShopRequestController::class, 'destroy'])->name('shop-requests.destroy');

    // Catégories et sous-catégories
    Route::resource('categories', CategoryController::class);
    Route::resource('sub-categories', SubCategoryController::class);
    Route::get('categories/{category}/subcategories', [ProductController::class, 'getSubcategories'])->name('categories.subcategories');
});

Route::middleware(['auth', 'role:vendor'])->prefix('vendor')->name('vendor.')->group(function () {
    // Dashboard vendeur
    Route::get('/dashboard', [VendorController::class, 'index'])->name('dashboard');

    // Produits vendeur
    Route::resource('products', VendorProductController::class);
    Route::get('/products/stock', [VendorProductController::class, 'stock'])->name('products.stock');
    Route::put('/products/{product}/stock', [VendorProductController::class, 'updateStock'])->name('products.updateStock');

    // Commandes vendeur
    Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
    Route::get('/orders/{id}', [OrderController::class, 'show'])->name('orders.show');
    Route::post('/orders/{id}/update-status', [OrderController::class, 'updateStatus'])->name('orders.updateStatus');
    Route::get('/orders/{id}/invoice', [OrderController::class, 'downloadInvoice'])->name('orders.invoice');

    // Messagerie vendeur
    Route::get('/chat/client/{clientId}', [ChatController::class, 'chatWithClient'])->name('chat.withClient');
    Route::post('/chat/client/{clientId}/send', [ChatController::class, 'sendMessage'])->name('chat.sendMessage');
    Route::get('/chat/client/{clientId}/messages', [ChatController::class, 'fetchMessages'])->name('chat.fetchMessages');

    // Boutiques vendeur
    Route::get('/shops', [ShopController::class, 'vendorIndex'])->name('shops.index');
    Route::get('/shops/create', [ShopController::class, 'vendorCreate'])->name('shops.create');
    Route::post('/shops', [ShopController::class, 'store'])->name('shops.store');
     // Shops
    Route::get('/shops', [VendorShopController::class, 'index'])->name('shops.index');
    Route::get('/shops/create', [VendorShopController::class, 'create'])->name('shops.create');
    Route::post('/shops', [VendorShopController::class, 'store'])->name('shops.store');
    Route::get('/shops/waiting', function () {
    return view('vendor.shops.waiting');
    })->name('vendor.shops.waiting')->middleware(['auth', 'role:vendor']);



});

Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/users/dashboard', [UserController::class, 'index'])->name('users.dashboard');

});

// Auth
Route::post('/login', [AuthenticatedSessionController::class, 'store'])->middleware(['web', 'guest'])->name('login');

// Route personnalisée statut produit admin
Route::put('/admin/products/{product}/{status}', [ProductController::class, 'updateStatus'])->name('admin.products.updateStatus');
