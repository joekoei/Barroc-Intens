<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::create([
            "name"=>"Devbyte",
            "phone"=>"06123456789",
            "street"=>"Teststraat",
            "house_number"=>"14",
            "city"=>"zevenbergen",
            "country_code"=>"NL",
            "bkr_checked"=>"13-10-2022"
        ]);
    }
}
