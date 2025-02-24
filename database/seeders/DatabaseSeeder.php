<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // 1️⃣ Exécuter d'abord le `RolesSeeder` pour s'assurer que les rôles existent
        $this->call(RolesSeeder::class);

        // 2️⃣ Vérifier que les rôles existent avant de créer les utilisateurs
        $adminRole = Role::where('name', 'admin')->first();
        $vendorRole = Role::where('name', 'vendor')->first();
        $userRole = Role::where('name', 'user')->first();

        if (!$adminRole || !$vendorRole || !$userRole) {
            throw new \Exception("Les rôles n'ont pas été créés. Vérifie `RolesSeeder.php`.");
        }

        // 3️⃣ Création des utilisateurs et assignation des rôles
        $admin = User::firstOrCreate([
            'email' => 'admin@example.com',
        ], [
            'name' => 'Admin User',
            'password' => bcrypt('password'),
        ]);
        $admin->assignRole($adminRole);

        $vendor = User::firstOrCreate([
            'email' => 'vendor@example.com',
        ], [
            'name' => 'Vendor User',
            'password' => bcrypt('password'),
        ]);
        $vendor->assignRole($vendorRole);

        $user = User::firstOrCreate([
            'email' => 'user@example.com',
        ], [
            'name' => 'Regular User',
            'password' => bcrypt('password'),
        ]);
        $user->assignRole($userRole);
    }
}
