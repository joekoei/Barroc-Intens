<?php

namespace Database\Seeders;

use App\Models\Invoice;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class InvoiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Invoice::factory()->count(500)->state(new Sequence(['prijs'=>'500.00'],
            ['prijs'=>'900.00'],
            ['prijs'=>'600.00'],
            ['prijs'=>'12000.00'],))->create();
    }
}
