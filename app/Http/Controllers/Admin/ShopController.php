<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Shop;
use App\Models\User;
use App\Notifications\BoutiqueAlerte;

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

    public function create()
    {
        $vendors = User::role('vendor')->get();
        return view('admin.shops.create', compact('vendors'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'vendor_id' => 'required|exists:users,id',
            'localisation' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:20',
            'description' => 'nullable|string',
        ]);

        Shop::create([
            'nom' => $request->nom,
            'vendor_id' => $request->vendor_id,
            'localisation' => $request->localisation,
            'phone' => $request->phone,
            'description' => $request->description,
            'statut' => 'en_attente',
        ]);

        return redirect()->route('admin.shops.index')->with('success', 'Boutique créée avec succès.');
    }

    public function edit(Shop $shop)
    {
        $vendors = User::role('vendor')->get();
        return view('admin.shops.edit', compact('shop', 'vendors'));
    }

    public function update(Request $request, Shop $shop)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'vendor_id' => 'required|exists:users,id',
            'localisation' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:20',
            'description' => 'nullable|string',
        ]);

        $shop->update([
            'nom' => $request->nom,
            'vendor_id' => $request->vendor_id,
            'localisation' => $request->localisation,
            'phone' => $request->phone,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.shops.index')->with('success', 'Boutique mise à jour avec succès.');
    }

    public function validateShop(Shop $shop)
    {
        $shop->update(['statut' => 'valide']);

        $message = 'Félicitations ! Votre boutique "' . $shop->nom . '" a été validée.';
        $shop->vendor?->notify(new BoutiqueAlerte($message, $shop->nom));

        return back()->with('success', 'Boutique validée avec succès.');
    }

    public function refuseShop(Shop $shop)
    {
        $shop->update(['statut' => 'refuse']);

        $message = 'Désolé, votre demande de boutique "' . $shop->nom . '" a été refusée.';
        $shop->vendor?->notify(new BoutiqueAlerte($message, $shop->nom));

        return back()->with('success', 'Boutique refusée.');
    }
    /**
 * Supprime une boutique.
 */
public function destroy(Shop $shop)
{
    $shop->delete();

    return redirect()->route('admin.shops.index')->with('success', 'Boutique supprimée avec succès.');
}

}
