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
            'notes'=>"{}"
        ]);

        User::create([
            'name' => 'Maintenance',
            'email' => 'info@maintenance.com',
            'password' => Hash::make('Maintenance123'),
            'role_id' => 2,
            'notes'=>"{}"
        ]);

        User::create([
            'name' => 'Inkoop',
            'email' => 'info@inkoop.com',
            'password' => Hash::make('Inkoop123'),
            'role_id' => 3,
            'notes'=>"{}"
        ]);

        User::create([
            'name' => 'Finance',
            'email' => 'info@finance.com',
            'password' => Hash::make('Finance123'),
            'role_id' => 4,
            'notes'=>"{}"
        ]);

        User::create([
            'name' => 'Klant',
            'email' => 'info@klant.com',
            'password' => Hash::make('Klant123'),
            'role_id' => 5,
            'notes'=>"{}"
        ]);

        User::create([
            "name"=>"Hoofd Maintenance",
            "email"=>"hoofd@maintenance.com",
            "password"=>Hash::make("Maintenance123"),
            "role_id"=>6,
            'notes'=>"{}"
        ]);

        User::create([
            "name"=>"Sjakie van de TD",
            "email"=>"sjakie@barroc.nl",
            "password"=>Hash::make("sjakie"),
            'role_id'=>2,
            'notes'=>"{}"
        ]);

        User::create([
            "name"=>"Harry van de TD",
            "email"=>"harry@barroc.nl",
            "password"=>Hash::make("harry"),
            'role_id'=>2,
            'notes'=>"{}"
        ]);

        User::create([
            'name' => 'Hoofd Inkoop',
            'email' => 'head@inkoop.com',
            'password' => Hash::make('Inkoop123'),
            'role_id' => 7,
            'notes'=>"{}"
        ]);

        User::factory()->count(150)->create();
        User::factory()->count(40)->create([
            "active"=>0
        ]);
    }
}
