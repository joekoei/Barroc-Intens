<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            "name"=>"sales"
        ]);

        Role::create([
            'name'=>"maintenance"
        ]);
        Role::create([
            "name"=>"inkoop"
        ]);

        Role::create([
            "name"=>"finance"
        ]);

        Role::create([
            "name"=>"klant"
        ]);

        Role::create([
            "name"=>"head-maintenance"
        ]);

        Role::create([
            "name"=>"head-inkoop"
        ]);
    }
}
