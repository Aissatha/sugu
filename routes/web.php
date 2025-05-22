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
//use App\Http\Controllers\Vendor\OrderController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Vendor\ChatController;
use App\Http\Controllers\Vendor\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\VariantController;




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

Route::prefix('admin')->middleware(['auth', 'role:admin'])->name('admin.')->group(function () {

    // Tableau de bord
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

    // Utilisateurs
    Route::resource('users', UserController::class);
    Route::get('users/historique', [UserController::class, 'historique'])->name('users.historique');
    Route::post('users/block/{user}', [UserController::class, 'block'])->name('users.block');
    Route::delete('users/delete/{user}', [UserController::class, 'delete'])->name('users.delete');

    // Produits
    Route::resource('products', ProductController::class)->names('products');

    // Variantes
    Route::get('products/{product}/variants', [VariantController::class, 'index'])->name('variants.index');
    Route::get('products/{product}/variants/create', [VariantController::class, 'create'])->name('variants.create');
    Route::post('products/{product}/variants', [VariantController::class, 'store'])->name('variants.store');
    Route::get('products/{product}/variants/{variant}/edit', [VariantController::class, 'edit'])->name('variants.edit');
    Route::put('products/{product}/variants/{variant}', [VariantController::class, 'update'])->name('variants.update');
    Route::delete('products/{product}/variants/{variant}', [VariantController::class, 'destroy'])->name('variants.destroy');

    // Page d'accueil admin
    Route::get('/', [UserController::class, 'index'])->name('index');

    // Page de création spéciale admin
    Route::get('/create', [AdminController::class, 'create'])->name('create');

    Route::put('/admin/products/{product}/toggle-status', [ProductController::class, 'toggleStatus'])->name('admin.products.toggleStatus');

     // ✅ Route personnalisée pour mettre à jour le statut d’un produit
    Route::put('products/{product}/status/{status}', [ProductController::class, 'updateStatus'])
        ->name('products.updateStatus');

});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('products', ProductController::class);

    // ✅ Ajoute ceci :
    Route::put('products/{product}/toggle-status', [ProductController::class, 'toggleStatus'])->name('products.toggleStatus');
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
/*Route::middleware(['auth', 'role:admin'])->prefix('admin/boutiques')->name('admin.boutiques.')->group(function () {
    Route::get('/', [BoutiqueController::class, 'index'])->name('index'); // liste boutiques
    Route::get('/demandes', [BoutiqueController::class, 'demandes'])->name('demandes'); // demandes en attente
    Route::get('/{id}', [BoutiqueController::class, 'show'])->name('show'); // détail boutique
    Route::post('/{id}/approve', [BoutiqueController::class, 'approve'])->name('approve');
    Route::post('/{id}/reject', [BoutiqueController::class, 'reject'])->name('reject');
    Route::post('/{id}/disable', [BoutiqueController::class, 'disable'])->name('disable');
    Route::post('/{id}/enable', [BoutiqueController::class, 'enable'])->name('enable');
    Route::post('/{id}/alert', [BoutiqueController::class, 'alert'])->name('alert');
    Route::delete('/{id}', [BoutiqueController::class, 'destroy'])->name('destroy');
});*/


Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::resource('shops', ShopController::class);

    Route::get('shop-requests', [ShopRequestController::class, 'index'])->name('shop-requests.index');
    Route::get('shop-requests/{shopRequest}', [ShopRequestController::class, 'show'])->name('shop-requests.show');
    Route::post('shop-requests/{shopRequest}/approve', [ShopRequestController::class, 'approve'])->name('shop-requests.approve');
    Route::post('shop-requests/{shopRequest}/reject', [ShopRequestController::class, 'reject'])->name('shop-requests.reject');
    Route::delete('shop-requests/{shopRequest}', [ShopRequestController::class, 'destroy'])->name('shop-requests.destroy');

    Route::resource('categories', CategoryController::class);
    Route::resource('sub-categories', SubCategoryController::class);

    // ✅ Route AJAX correcte pour charger les sous-catégories d'une catégorie
    Route::get('categories/{category}/subcategories', [ProductController::class, 'getSubcategories'])
        ->name('admin.categories.subcategories');
});


Route::middleware(['auth', 'role:vendor'])->prefix('vendor')->name('vendor.')->group(function () {
    Route::resource('products', \App\Http\Controllers\Vendor\ProductController::class);
    Route::get('/products/stock', [\App\Http\Controllers\Vendor\ProductController::class, 'stock'])->name('vendor.products.stock');
    Route::put('/products/{product}/stock', [\App\Http\Controllers\Vendor\ProductController::class, 'updateStock'])->name('vendor.products.updateStock');

    // Commandes
    Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
    Route::get('orders/{id}', [OrderController::class, 'show'])->name('orders.show');
    Route::post('orders/{id}/update-status', [OrderController::class, 'updateStatus'])->name('orders.updateStatus');
    Route::get('orders/{id}/invoice', [OrderController::class, 'downloadInvoice'])->name('orders.invoice');

    // Messagerie vendeur → client
    Route::get('chat/client/{clientId}', [ChatController::class, 'chatWithClient'])->name('chat.withClient');
    Route::post('/chat/client/{clientId}/send', [ChatController::class, 'sendMessage'])->name('chat.sendMessage');
    Route::get('/chat/client/{clientId}/messages', [ChatController::class, 'fetchMessages'])->name('chat.fetchMessages');

});

Route::put('/admin/products/{product}/{status}', [ProductController::class, 'updateStatus'])
    ->name('admin.products.updateStatus');

