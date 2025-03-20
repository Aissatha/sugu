<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\UserAction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    // Appliquer le middleware 'isAdmin' à toutes les méthodes du contrôleur
    public function __construct()
    {
        //$this->middleware('isAdmin'); // Applique le middleware 'isAdmin' ici

    // Appliquer le middleware uniquement à certaines méthodes
        $this->middleware('isAdmin')->only(['index', 'create', 'edit']);
        $this->middleware('isAdmin')->except(['show']); // Exemple : Appliquer le middleware à toutes les méthodes sauf 'show'

    }

    // Afficher la liste des utilisateurs
    public function index()
    {
        $users = User::all(); // Récupère tous les utilisateurs
        return view('admin.index', compact('users'));
    }

    // Afficher le formulaire de création d'utilisateur
    public function create()
    {
        return view('admin.create');
    }

    // Ajouter un utilisateur
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
            'role' => 'required|in:client,vendeur,admin',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => $request->role,
            'is_active' => $request->is_active ?? true, // Actif par défaut
        ]);

        UserAction::create([
            'user_id' => $user->id,
            'action' => 'Création du compte',
        ]);

        return redirect()->route('admin.users.index');
    }

    // Modifier un utilisateur
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.edit', compact('user'));
    }

    // Mettre à jour un utilisateur
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'role' => 'required|in:client,vendeur,admin',
        ]);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'is_active' => $request->is_active,
        ]);

        UserAction::create([
            'user_id' => $user->id,
            'action' => 'Mise à jour du profil',
        ]);

        return redirect()->route('admin.index');
    }

    // Supprimer un utilisateur
    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        UserAction::create([
            'user_id' => $user->id,
            'action' => 'Suppression du compte',
        ]);

        return redirect()->route('admin.index');
    }

    // Bloquer un utilisateur
    public function block($id)
    {
        $user = User::findOrFail($id);
        $user->update(['is_active' => false]);

        UserAction::create([
            'user_id' => $user->id,
            'action' => 'Blocage du compte',
        ]);

        return redirect()->route('admin.index');
    }



}

