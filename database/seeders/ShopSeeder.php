<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Shop;
use App\Models\User;

class ShopSeeder extends Seeder
{
    public function run(): void
    {
        // Prend un utilisateur ayant le rôle vendor
        $vendor = User::role('vendor')->first();

        // Si aucun vendeur trouvé, on crée un utilisateur vendor fictif
        if (!$vendor) {
            $vendor = User::create([
                'nom' => 'Vendeur Test',
                'email' => 'vendor@example.com',
                'password' => bcrypt('password'),
            ]);
            $vendor->assignRole('vendor');
        }

        // Crée la boutique
        Shop::create([
            'vendor_id' => $vendor->id,
            'nom' => 'La Boutique Test',
            'description' => 'Ceci est une boutique de test',
            'statut' => 'valide',
        ]);
    }
}
