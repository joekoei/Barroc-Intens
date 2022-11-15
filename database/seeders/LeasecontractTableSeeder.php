<?php

namespace Database\Seeders;

use App\Http\Controllers\LeasecontractsController;
use App\Models\leasecontract;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class LeasecontractTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Leasecontract::factory()->count(150)->state(new Sequence(
            ['status'=>'Betaald'],
            ['status'=>'Niet Betaald'],
            ['prijs'=>'500.00'],
            ['prijs'=>'900.00'],
            ['prijs'=>'600.00'],
            ['prijs'=>'12000.00'],
            ['pay_method'=>'Maandelijks'],
            ['pay_method'=>'Jaarlijks'],
        ))->create();

    }
}
