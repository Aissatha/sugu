<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesSeeder extends Seeder
{
    public function run()
    {
        // Liste des permissions pour la plateforme
        $permissions = [
            // Gestion des utilisateurs
            'manage users',  // Gérer les utilisateurs (Admin)
            'view users',    // Voir la liste des utilisateurs (Admin)
            'delete users',  // Supprimer un utilisateur (Admin)

            // Gestion des vendeurs
            'approve vendors',  // Approuver les vendeurs (Admin)
            'manage vendors',   // Gérer les vendeurs (Admin)
            'view vendors',     // Voir les vendeurs (Admin)

            // Gestion des produits
            'create products',  // Ajouter des produits (Vendor)
            'edit products',    // Modifier ses produits (Vendor)
            'delete products',  // Supprimer ses produits (Vendor)
            'view products',    // Voir les produits (Tous)

            // Gestion des commandes
            'manage orders',    // Gérer toutes les commandes (Admin)
            'view orders',      // Voir ses commandes (Vendor & User)
            'process orders',   // Gérer les commandes en attente (Vendor)

            // Gestion des paiements
            'manage payments',  // Gérer les paiements (Admin)
            'view payments',    // Voir l'historique des paiements (Admin & Vendor)

            // Gestion du support client
            'respond to support tickets',  // Répondre aux tickets (Admin)
            'create support tickets',      // Ouvrir un ticket (User & Vendor)
            'view support tickets',        // Voir ses tickets (User & Vendor)
        ];

        // Création des permissions si elles n'existent pas encore
        foreach ($permissions as $permission) {
            Permission::firstOrCreate([
                'name' => $permission,
                'guard_name' => 'web' // Ajout du guard
            ]);
        }

        // Création des rôles avec le guard "web"
        $adminRole = Role::firstOrCreate(['name' => 'admin', 'guard_name' => 'web']);
        $vendorRole = Role::firstOrCreate(['name' => 'vendor', 'guard_name' => 'web']);
        $userRole = Role::firstOrCreate(['name' => 'user', 'guard_name' => 'web']);

        // Attribution des permissions aux rôles
        $adminRole->givePermissionTo([
            'manage users', 'view users', 'delete users',
            'approve vendors', 'manage vendors', 'view vendors',
            'manage orders', 'view orders',
            'manage payments', 'view payments',
            'respond to support tickets'
        ]);

        $vendorRole->givePermissionTo([
            'create products', 'edit products', 'delete products', 'view products',
            'view orders', 'process orders',
            'view payments',
            'create support tickets', 'view support tickets'
        ]);

        $userRole->givePermissionTo([
            'view products',
            'view orders',
            'create support tickets', 'view support tickets'
        ]);
    }
}
