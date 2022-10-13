<?php

namespace Database\Seeders;

use App\Models\Maintenance;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AppointsmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Maintenance::create([
            'company_id' => '1',
            'remark' => 'test',
        ]);
        Maintenance::create([
            'company_id' => '2',
            'remark' => 'test',
        ]);
        Maintenance::create([
            'company_id' => '1',
            'remark' => 'test',
        ]);
    }
}
