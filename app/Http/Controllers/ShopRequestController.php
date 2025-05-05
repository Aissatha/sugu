<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShopRequest;
use App\Models\Shop;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
class ShopRequestController extends Controller
{
    public function index()
    {
        $requests = ShopRequest::with('vendor')->where('statut', 'en_attente')->latest()->paginate(10);
        return view('admin.shop_requests.index', compact('requests'));
    }

    public function show(ShopRequest $shopRequest)
    {
        return view('admin.shop_requests.show', compact('shopRequest'));
    }

    public function approve(ShopRequest $shopRequest)
    {
        // 1. Créer la boutique
        $shop = Shop::create([
            'vendor_id' => $shopRequest->vendor_id,
            'nom' => $shopRequest->nom_boutique,
            'slug' => Str::slug($shopRequest->nom_boutique) . '-' . uniqid(),
            'description' => $shopRequest->description,
            'statut' => 'actif',
        ]);

        // 2. Mettre à jour la demande
        $shopRequest->update(['statut' => 'approuvée']);

        // 3. Email + Notification
        Mail::raw("Votre boutique a été approuvée avec succès.", function ($message) use ($shopRequest) {
            $message->to($shopRequest->vendor->email)->subject("Boutique approuvée !");
        });

        // 4. Log
        Log::info("Boutique approuvée : {$shop->nom} pour le vendeur #{$shop->vendor_id}");

        return redirect()->route('shop-requests.index')->with('success', 'Boutique approuvée.');
    }

    public function reject(Request $request, ShopRequest $shopRequest)
    {
        $request->validate([
            'justification' => 'required|string|max:500'
        ]);

        $shopRequest->update([
            'statut' => 'refusée',
            'justification_refus' => $request->justification
        ]);

        Mail::raw("Votre demande de boutique a été refusée : {$request->justification}", function ($message) use ($shopRequest) {
            $message->to($shopRequest->vendor->email)->subject("Demande refusée");
        });

        Log::warning("Demande de boutique refusée : {$shopRequest->nom_boutique} | Motif : {$request->justification}");

        return redirect()->route('shop-requests.index')->with('success', 'Demande refusée.');
    }

    public function destroy(ShopRequest $shopRequest)
    {
        $shopRequest->delete();
        Log::info("Demande de boutique supprimée : {$shopRequest->nom_boutique}");
        return redirect()->route('shop-requests.index')->with('success', 'Demande supprimée.');
    }
}
