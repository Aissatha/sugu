<?php
//App\Http\Controllers\Auth\RegisterController.php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register'); // Affiche la page d'inscription
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        // Attribution du rôle "user" par défaut
        $user->assignRole('user'); // Assurez-vous que ce rôle existe

        // Authentifier l'utilisateur après l'inscription
        Auth::login($user);

        // Redirection vers le dashboard utilisateur
        return redirect()->route('users.dashboard');
    }
}
