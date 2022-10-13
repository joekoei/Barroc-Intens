<?php

namespace Database\Seeders;

use App\Models\ProductCatogory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductCatogorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductCatogory::create([
            'name'=>"Koffie Automaten",
            'is_employee_only'=>0
        ]);

        ProductCatogory::create([
            'name'=>"Koffie Bonen",
            'is_employee_only'=>0
        ]);

        ProductCatogory::create([
            'name'=>"Onderdelen",
            'is_employee_only'=>1
        ]);
    }
}
