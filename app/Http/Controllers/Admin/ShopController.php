<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Shop;
use App\Models\User;
use App\Notifications\BoutiqueAlerte;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

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
    try {
        $isAdmin = auth()->user()->hasRole('admin');

        $validator = Validator::make($request->all(), [
            'nom' => 'required|string|max:255',
            'vendor_id' => $isAdmin ? 'required|exists:users,id' : '',
            'description' => 'nullable|string',
            'localisation' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:20',
            'logo' => 'nullable|file|mimes:jpg,jpeg,png|max:2048',
            'justificatif' => 'required|file|mimes:jpg,jpeg,png,pdf|max:4096',
        ]);

        if ($validator->fails()) {
            return $request->expectsJson()
                ? response()->json(['errors' => $validator->errors()], 422)
                : back()->withErrors($validator)->withInput();
        }

        $logoPath = $request->hasFile('logo')
            ? $request->file('logo')->store('logos', 'public')
            : null;

        $justificatifPath = $request->file('justificatif')->store('justificatifs', 'public');

        Shop::create([
            'nom' => $request->nom,
            'vendor_id' => $isAdmin ? $request->vendor_id : auth()->id(), // 👈 ici on accepte aussi les users simples
            'description' => $request->description,
            'localisation' => $request->localisation,
            'phone' => $request->phone,
            'logo' => $logoPath,
            'justificatif' => $justificatifPath,
            'statut' => 'en_attente',
        ]);

        if ($request->expectsJson()) {
            return response()->json(['success' => true]);
        }

        return redirect()->route('admin.shops.index')->with('success', 'Boutique créée avec succès.');

    } catch (\Exception $e) {
        if ($request->expectsJson()) {
            return response()->json(['message' => $e->getMessage()], 500);
        }

        return back()->with('error', 'Erreur serveur : ' . $e->getMessage());
    }
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

    // Donner le rôle vendor si l'utilisateur ne l'a pas encore
    if ($shop->vendor && !$shop->vendor->hasRole('vendor')) {
        $shop->vendor->assignRole('vendor');
    }

    $message = 'Félicitations ! Votre boutique "' . $shop->nom . '" a été validée.';
    $shop->vendor?->notify(new BoutiqueAlerte($message, $shop->nom));

    return back()->with('success', 'Boutique validée avec succès.');    }

    public function refuseShop(Shop $shop)
    {
        $shop->update(['statut' => 'refuse']);

        $message = 'Désolé, votre demande de boutique "' . $shop->nom . '" a été refusée.';
        $shop->vendor?->notify(new BoutiqueAlerte($message, $shop->nom));

        return back()->with('success', 'Boutique refusée.');
    }

    public function destroy(Shop $shop)
    {
        $shop->delete();

        return redirect()->route('admin.shops.index')->with('success', 'Boutique supprimée avec succès.');
    }
}
