<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Boutique;
use App\Models\User;
use Illuminate\Http\Request;

class BoutiqueController extends Controller
{
    // Liste des boutiques (validées, refusées, etc.)
    public function index()
    {
        $boutiques = Boutique::with('user')->latest()->paginate(10);
        return view('admin.boutiques.index', compact('boutiques'));
    }

    // Liste des demandes en attente
    public function demandes()
    {
        $boutiques = Boutique::where('statut', 'en_attente')->with('user')->paginate(10);
        return view('admin.boutiques.demandes', compact('boutiques'));
    }

    // Détail d’une boutique
    public function show($id)
    {
        $boutique = Boutique::with(['user', 'produits'])->findOrFail($id);
        return view('admin.boutiques.show', compact('boutique'));
    }

    // Approver une boutique
    public function approve($id)
    {
        $boutique = Boutique::findOrFail($id);
        $boutique->update(['statut' => 'active']);
        return back()->with('success', 'Boutique approuvée avec succès.');
    }

    // Rejeter une boutique
    public function reject(Request $request, $id)
    {
        $boutique = Boutique::findOrFail($id);
        $boutique->update(['statut' => 'refusée']);
        // tu peux ajouter ici l'envoi de mail
        return back()->with('error', 'Boutique refusée.');
    }

    // Désactiver temporairement
    public function disable(Request $request, $id)
    {
        $request->validate(['motif' => 'required']);
        $boutique = Boutique::findOrFail($id);
        $boutique->update(['statut' => 'désactivée']);
        return back()->with('warning', 'Boutique désactivée temporairement.');
    }

    // Réactiver
    public function enable($id)
    {
        $boutique = Boutique::findOrFail($id);
        $boutique->update(['statut' => 'active']);
        return back()->with('success', 'Boutique réactivée.');
    }

    // Envoyer une alerte (notification ou mail)
    public function alert(Request $request, $id)
    {
        $request->validate(['message' => 'required']);
        //$boutique = Boutique::findOrFail($id);
        $boutique = Boutique::with('user')->findOrFail($id);
        $vendeur = $boutique->user;

         // Envoi de la notification par e-mail
        $vendeur->notify(new BoutiqueAlerte($request->message, $boutique->nom));

        // ici tu peux notifier ou envoyer un email
        // Notification::route('mail', $vendeur->email)->notify(new BoutiqueAlert($request->message));

        return back()->with('info',  'L’alerte a été envoyée au vendeur par e-mail.');
    }

    // Supprimer
    public function destroy($id)
    {
        $boutique = Boutique::findOrFail($id);
        $boutique->delete();
        return back()->with('success', 'Boutique supprimée.');
    }
}
