<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesSeeder extends Seeder
{
    public function run()
    {
        // Créer les rôles si non existants
        $adminRole  = Role::firstOrCreate(['name' => 'admin', 'guard_name' => 'web']);
        $vendorRole = Role::firstOrCreate(['name' => 'vendor', 'guard_name' => 'web']);
        $clientRole = Role::firstOrCreate(['name' => 'client', 'guard_name' => 'web']);
        $userRole   = Role::firstOrCreate(['name' => 'user', 'guard_name' => 'web']);

        // Permissions spécifiques
        Permission::firstOrCreate(['name' => 'list-users']);
        Permission::firstOrCreate(['name' => 'add-user']);
        Permission::firstOrCreate(['name' => 'edit-user']);
        Permission::firstOrCreate(['name' => 'view-historique']);
        Permission::firstOrCreate(['name' => 'block-user']);
        Permission::firstOrCreate(['name' => 'delete-user']);

        // Liste des permissions générales
        $permissions = [
            'manage users', 'view users', 'delete users',
            'approve vendors', 'manage vendors', 'view vendors',
            'create products', 'edit products', 'delete products', 'view products',
            'manage orders', 'view orders', 'process orders',
            'manage payments', 'view payments',
            'respond to support tickets', 'create support tickets', 'view support tickets',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate([
                'name' => $permission,
                'guard_name' => 'web',
            ]);
        }

        // Attribution des permissions aux rôles
        $adminRole->givePermissionTo([
            'manage users', 'view users', 'delete users',
            'approve vendors', 'manage vendors', 'view vendors',
            'manage orders', 'view orders',
            'manage payments', 'view payments',
            'respond to support tickets',
            'list-users', 'add-user', 'edit-user', 'view-historique', 'block-user', 'delete-user'
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
