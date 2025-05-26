<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HasValidatedShop
{
    public function handle(Request $request, Closure $next): mixed
    {
        $user = Auth::user();

        if (!$user || !$user->shop || $user->shop->statut !== 'valide') {
            return redirect()->route('shops.waiting');
        }

        return $next($request);
    }
}
