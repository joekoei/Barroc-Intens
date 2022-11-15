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
            'date_added'=>date_create('now')->format('Y-m-d H:i:s'),
            'user_id'=> '2'
        ]);
        Maintenance::create([
            'company_id' => '1',
            'remark' => 'test',
            'date_added'=>date_create('now')->format('Y-m-d H:i:s'),
            'user_id'=> '2'
        ]);
        Maintenance::create([
            'company_id' => '1',
            'remark' => 'test',
            'date_added'=>date_create('now')->format('Y-m-d H:i:s'),
            'user_id'=> '2'
        ]);
    }
}
