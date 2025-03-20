<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->role === 'admin') {
            return $next($request); // Si l'utilisateur est un admin, continue
        }

        // Si l'utilisateur n'est pas admin, rediriger vers une autre page
        return redirect('/home')->with('error', 'Accès interdit, vous devez être admin.');
    }
}
