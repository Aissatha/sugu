<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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

    public function validateShop(Shop $shop)
    {
            $shop->update(['statut' => 'valide']);

    $message = 'Félicitations ! Votre boutique "' . $shop->nom . '" a été validée.';
    $shop->vendor->notify(new BoutiqueAlerte($message, $shop->nom));

    return back()->with('success', 'Boutique validée avec succès.');    }

    public function refuseShop(Shop $shop)
    {
            $shop->update(['statut' => 'refuse']);

    $message = 'Désolé, votre demande de boutique "' . $shop->nom . '" a été refusée.';
    $shop->vendor->notify(new BoutiqueAlerte($message, $shop->nom));

    return back()->with('success', 'Boutique refusée.');
    }
}
