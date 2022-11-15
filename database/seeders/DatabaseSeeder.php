<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            ProductCatogorySeeder::class,
            CompanySeeder::class,
            AppointsmentsSeeder::class,
            ProductSeeder::class,
            InvoiceTableSeeder::class,
            WorkOrderTableSeeder::class,
            LeasecontractTableSeeder::class
        ]);
    }
}
