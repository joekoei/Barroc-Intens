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
        $sale = new Role([
            "name"=>"sales"
        ]);
        $sale->save();

        $maintenance = new Role([
            'name'=>"maintenance"
        ]);

        $maintenance->save();

        $inkoop = new Role([
            "name"=>"inkoop"
        ]);
        $inkoop->save();

        $finance = new Role([
            "name"=>"finance"
        ]);
        $finance->save();

        $klant = new Role([
            "name"=>"klant"
        ]);
        $klant->save();
    }
}
