<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
        User::create([
            'name' => 'Sales',
            'email' => 'info@sales.com',
            'password' => Hash::make('Sales123'),
            'role_id' => 1,
        ]);

        User::create([
            'name' => 'Maintenance',
            'email' => 'info@maintenance.com',
            'password' => Hash::make('Maintenance123'),
            'role_id' => 2,
        ]);

        User::create([
            'name' => 'Inkoop',
            'email' => 'info@inkoop.com',
            'password' => Hash::make('Inkoop123'),
            'role_id' => 3,
        ]);

        User::create([
            'name' => 'Finance',
            'email' => 'info@finance.com',
            'password' => Hash::make('Finance123'),
            'role_id' => 4,
        ]);

        User::create([
            'name' => 'Klant',
            'email' => 'info@klant.com',
            'password' => Hash::make('Klant123'),
            'role_id' => 5,
        ]);
    }
}
