<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = Role::where('nom','admin')->first();
        $gestionFinanceRole = Role::where('nom','gestionFinance')->first();
        $gestionProjetRole = Role::where('nom','gestionProjet')->first();
    
        $admin = User::create([
            'name' => 'administrateur',
            'is_admin' => 1,
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ]);

        $gestionFinance = User::create([
            'name' => 'Financier',
            'is_admin' => 1,
            'email' => 'Gfinance@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ]);

        $gestionProjet = User::create([
            'name' => 'Gestionnaire Projets',
            'is_admin' => 1,
            'email' => 'Gprojet@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ]);

        $admin-> roles()->attach($adminRole);
        $gestionFinance-> roles()->attach($gestionFinanceRole);
        $gestionProjet-> roles()->attach($gestionProjetRole);

    }

}
