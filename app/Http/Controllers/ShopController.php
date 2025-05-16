<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ShopController extends Controller
{
    /**
     * Vendeur : soumettre une demande de boutique
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255|unique:shops,nom',
            'description' => 'nullable|string',
            'localisation' => 'nullable|string',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'justificatif' => 'nullable|file|mimes:jpeg,png,pdf|max:4096',
        ]);

        $data = $request->only('nom', 'description', 'localisation');
        $data['vendor_id'] = Auth::id();
        $data['slug'] = Str::slug($request->nom);
        $data['statut'] = 'en_attente';

        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('logos', 'public');
        }

        if ($request->hasFile('justificatif')) {
            $data['justificatif'] = $request->file('justificatif')->store('justificatifs', 'public');
        }

        Shop::create($data);

        return redirect()->back()->with('success', 'Votre demande a été soumise avec succès.');
    }

    /**
     * Admin : liste des demandes de boutique
     */
    public function index()
    {
        $shops = Shop::with('vendor')->latest()->paginate(10);
        return view('admin.shops.index', compact('shops'));
    }

    /**
     * Admin : voir les détails d'une demande
     */
    public function show($id)
    {
        $shop = Shop::with('vendor')->findOrFail($id);
        return view('admin.shops.show', compact('shop'));
    }

    /**
     * Admin : valider une boutique
     */
    public function approve($id)
    {
        $shop = Shop::findOrFail($id);
        $shop->update(['statut' => 'valide']);

        return redirect()->back()->with('success', 'Boutique validée avec succès.');
    }

    /**
     * Admin : refuser une boutique
     */
    public function reject($id)
    {
        $shop = Shop::findOrFail($id);
        $shop->update(['statut' => 'refuse']);

        return redirect()->back()->with('success', 'Boutique refusée.');
    }
}
