<?php

namespace App\Http\Responses;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Contracts\LoginResponse as FortifyLoginResponse;

class LoginResponse implements FortifyLoginResponse
{
    public function toResponse($request)
    {
        $user = Auth::user();

        if ($request->wantsJson()) {
            return new JsonResponse(['message' => 'Connexion réussie', 'user' => $user], 200);
        }

        if ($user->hasRole('admin')) {
            return redirect()->route('admin.dashboard');
        } elseif ($user->hasRole('vendor')) {
            return redirect()->route('vendor.dashboard');
        } else {
            return redirect()->route('user.dashboard');
        }
    }
}
