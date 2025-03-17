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
    }

    public function validateVendor(Vendor $vendor)
    {
        // Ajoute ici la logique pour valider un vendeur
        return redirect()->route('vendor.list')->with('success', 'Vendeur validé avec succès.');
    }


}
