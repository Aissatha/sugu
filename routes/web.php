<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\ShopController as AdminShopController;
use App\Http\Controllers\Vendor\ShopController as VendorShopController;
use App\Http\Controllers\ShopRequestController;
use App\Http\Controllers\Vendor\ProductController as VendorProductController;
use App\Http\Controllers\Vendor\ChatController;
use App\Http\Controllers\Vendor\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\VariantController;
use App\Models\Category;

Route::get('/', function () {
    $categories = Category::all();
    return view('welcome', compact('categories'));
})->name('home');

Route::get('/stores', function () {
    return view('stores.store');
});

// Auth
Route::post('/login', [AuthenticatedSessionController::class, 'store'])->middleware(['web', 'guest'])->name('login');

// Dashboard de base
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// ================= ADMIN =================
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

    // ✅ Gestion des boutiques (propre)
    Route::resource('shops', AdminShopController::class)->names('shops');
    Route::post('shops/{shop}/validate', [AdminShopController::class, 'validateShop'])->name('shops.validate');
    Route::post('shops/{shop}/refuse', [AdminShopController::class, 'refuseShop'])->name('shops.refuse');
    Route::get('/admin/shops/{shop}/edit', [ShopController::class, 'edit'])->name('admin.shops.edit');


    // Catégories et sous-catégories
    Route::resource('categories', CategoryController::class);
    Route::resource('sub-categories', SubCategoryController::class);
    Route::get('categories/{category}/subcategories', [ProductController::class, 'getSubcategories'])->name('categories.subcategories');
    Route::get('/shops/{shop}/validate', [ShopController::class, 'validateShop'])->name('shops.validate');

});

// ================= VENDEUR =================
Route::middleware(['auth', 'role:vendor'])->prefix('vendor')->name('vendor.')->group(function () {
    Route::get('/dashboard', [VendorController::class, 'index'])->name('dashboard');

    // Produits vendeur
    Route::resource('products', VendorProductController::class);
    Route::get('/products/stock', [VendorProductController::class, 'stock'])->name('products.stock');
    Route::put('/products/{product}/stock', [VendorProductController::class, 'updateStock'])->name('products.updateStock');

    // Commandes
    Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
    Route::get('/orders/{id}', [OrderController::class, 'show'])->name('orders.show');
    Route::post('/orders/{id}/update-status', [OrderController::class, 'updateStatus'])->name('orders.updateStatus');
    Route::get('/orders/{id}/invoice', [OrderController::class, 'downloadInvoice'])->name('orders.invoice');

    // Messagerie
    Route::get('/chat/client/{clientId}', [ChatController::class, 'chatWithClient'])->name('chat.withClient');
    Route::post('/chat/client/{clientId}/send', [ChatController::class, 'sendMessage'])->name('chat.sendMessage');
    Route::get('/chat/client/{clientId}/messages', [ChatController::class, 'fetchMessages'])->name('chat.fetchMessages');

    // Boutiques vendeur
    Route::get('/shops/waiting', function () {
        return view('vendor.shops.waiting');
    })->name('shops.waiting');

    Route::resource('shops', VendorShopController::class)->names('shops');
});

// ================= USER =================
Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/users/dashboard', [UserController::class, 'index'])->name('users.index');
});

// ================= FRONT PUBLIC =================
Route::get('/shop/category/{slug}', function ($slug) {
    $category = Category::where('slug', $slug)->firstOrFail();
    $products = $category->products;
    return view('shop.category', compact('category', 'products'));
})->name('shop.category');
