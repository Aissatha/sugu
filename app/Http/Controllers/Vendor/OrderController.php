<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use Barryvdh\DomPDF\Facade\Pdf;

class OrderController extends Controller
{
    /**
     * Liste des commandes du vendeur connecté, avec filtre par statut.
     */
    public function index(Request $request)
    {
        $query = Order::where('vendor_id', Auth::id());

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        $orders = $query->latest()->get();

        return view('vendor.orders.index', compact('orders'));
    }

    /**
     * Détail d'une commande.
     */
    public function show($id)
    {
        $order = Order::where('vendor_id', Auth::id())->findOrFail($id);
        return view('vendor.orders.show', compact('order'));
    }

    /**
     * Mettre à jour le statut de la commande.
     */
    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:en_attente,validée,expédiée,livrée,annulée',
        ]);

        $order = Order::where('vendor_id', Auth::id())->findOrFail($id);
        $order->status = $request->status;
        $order->save();

        return redirect()->back()->with('success', 'Statut de la commande mis à jour.');
    }

    public function downloadInvoice($id)
    {
        $order = Order::where('vendor_id', Auth::id())->findOrFail($id);

        $pdf = Pdf::loadView('vendor.orders.invoice', compact('order'));
        return $pdf->download('facture-commande-' . $order->id . '.pdf');
    }
}
