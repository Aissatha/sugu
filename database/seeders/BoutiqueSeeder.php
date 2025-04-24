<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Boutique;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BoutiqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            // On prend tous les vendeurs
    $vendeurs = User::role('vendeur')->get();

    foreach ($vendeurs as $user) {
        Boutique::create([
            'nom' => 'Boutique de ' . $user->name,
            'description' => 'Une superbe boutique test pour ' . $user->name,
            'statut' => collect(['active', 'en_attente', 'désactivée', 'refusée'])->random(),
            'user_id' => $user->id,
            'chiffre_affaires' => rand(10000, 500000),
        ]);
    }
    }
}
