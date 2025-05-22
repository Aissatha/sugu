<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $shops = Shop::with('vendor')->latest()->paginate(15);
        return view('admin.shops.index', compact('shops'));
    }

    public function show(Shop $shop)
    {
        return view('admin.shops.show', compact('shop'));
    }

    public function validateShop(Shop $shop)
    {
        $shop->update(['statut' => 'valide']);
        return redirect()->route('admin.shops.index')->with('success', 'Boutique validée.');
    }

    public function refuseShop(Shop $shop)
    {
        $shop->update(['statut' => 'refuse']);
        return redirect()->route('admin.shops.index')->with('error', 'Boutique refusée.');
    }
}
