<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ShopController extends Controller
{
    public function index()
    {
        $shops = Shop::with('vendor')->paginate(10);
        return view('admin.shops.index', compact('shops'));
    }

    public function create()
    {
        $vendors = \App\Models\User::where('role', 'vendeur')->get();
        return view('admin.shops.create', compact('vendors'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string',
            'vendor_id' => 'required|exists:vendors,id',
        ]);

        Shop::create([
            'nom' => $request->nom,
            'slug' => Str::slug($request->nom) . '-' . uniqid(),
            'vendor_id' => $request->vendor_id,
            'description' => $request->description,
            'localisation' => $request->localisation,
            'statut' => $request->statut ?? 'actif',
        ]);

        return redirect()->route('shops.index')->with('success', 'Boutique créée avec succès.');
    }

    public function show(Shop $shop)
    {
        return view('admin.shops.show', compact('shop'));
    }

    public function edit(Shop $shop)
    {
        $vendors = \App\Models\User::where('role', 'vendeur')->get();
        return view('admin.shops.edit', compact('shop', 'vendors'));
    }

    public function update(Request $request, Shop $shop)
    {
        $request->validate([
            'nom' => 'required|string',
        ]);

        $shop->update([
            'nom' => $request->nom,
            'slug' => Str::slug($request->nom) . '-' . uniqid(),
            'vendor_id' => $request->vendor_id,
            'description' => $request->description,
            'localisation' => $request->localisation,
            'statut' => $request->statut,
        ]);

        return redirect()->route('shops.index')->with('success', 'Boutique mise à jour.');
    }

    public function destroy(Shop $shop)
    {
        $shop->delete();
        return redirect()->route('shops.index')->with('success', 'Boutique supprimée.');
    }
}
