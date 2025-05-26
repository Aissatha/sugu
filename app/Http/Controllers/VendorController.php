<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendor;


class VendorController extends Controller
{
    public function index()
    {
        $vendors = Vendor::all(); // Récupérer tous les vendeurs
        return view('vendor.dashboard', compact('vendors'));

         $shop = \App\Models\Shop::where('vendor_id', auth()->id())->first();

    if (!$shop) {
        return redirect()->route('shops.create')->with('warning', 'Veuillez d’abord créer votre boutique.');
    }

    if ($shop->statut === 'en_attente') {
        return redirect()->route('vendor.shops.waiting');
    }

    if ($shop->statut === 'refuse') {
        return redirect()->route('vendor.shops.refused'); // à créer si tu veux gérer ça aussi
    }
    }

    public function validateVendor(Vendor $vendor)
    {
        // Ajoute ici la logique pour valider un vendeur
        return redirect()->route('vendor.list')->with('success', 'Vendeur validé avec succès.');
    }


}
