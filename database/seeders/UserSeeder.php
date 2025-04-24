<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'admin@suguba.test'],
            [
                'name' => 'Admin Test',
                'password' => Hash::make('password'),
            ]
        )->assignRole('admin');


        // Vendeurs
        User::factory(5)->create()->each(function ($user) {
            $user->assignRole('vendeur'); // ou un rôle générique si tu n'as pas encore créé "vendeur"
        });
    }
}
