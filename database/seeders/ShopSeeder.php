<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Shop;
use App\Models\User;

class ShopSeeder extends Seeder
{
    public function run(): void
    {
        $user = \App\Models\User::first(); // ou un ID précis
        Shop::create([
            'user_id' => $user->id,
            'nom' => 'La Boutique Test',
            'adresse' => 'Quartier Commerce',
            'phone' => '670000000',
            'email' => 'boutique@example.com',
            'logo' => null,
            'statut' => 'valide',
        ]);
    }
}
