<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use function Illuminate\Events\queueable;

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
            "bkr_checked"=>date_create('now')->format('Y-m-d H:i:s'),
            "contact_id"=>"5"
        ]);

        $users = User::all();

        for ($i = 10; $i <= 199; $i++) {
            Company::factory()->count(1)->create([
                "contact_id"=>$i
            ]);
        }
    }
}
