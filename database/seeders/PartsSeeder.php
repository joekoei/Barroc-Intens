<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PartsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name'=>'Rubber (10 mm)',
            'price' => '0.39',
            'image_paths' => '',
            'description' => 'Onderdeel',
            'product_catogory_id' => '3'
        ]);
        Product::create([
            'name'=>'Rubber (14 mm)',
            'price' => '0.45',
            'image_paths' => '',
            'description' => 'Onderdeel',
            'product_catogory_id' => '3'
        ]);
        Product::create([
            'name'=>'Slang',
            'price' => '4.45',
            'image_paths' => '',
            'description' => 'Onderdeel',
            'product_catogory_id' => '3'
        ]);
        Product::create([
            'name'=>'Voeding (elektra)',
            'price' => '68.69',
            'image_paths' => '',
            'description' => 'Onderdeel',
            'product_catogory_id' => '3'
        ]);
        Product::create([
            'name'=>'Ontkalker',
            'price' => '4',
            'image_paths' => '',
            'description' => 'Onderdeel',
            'product_catogory_id' => '3'
        ]);
        Product::create([
            'name'=>'Waterfilter',
            'price' => '299.45',
            'image_paths' => '',
            'description' => 'Onderdeel',
            'product_catogory_id' => '3'
        ]);
        Product::create([
            'name'=>'Reservoir sensor',
            'price' => '89.99',
            'image_paths' => '',
            'description' => 'Onderdeel',
            'product_catogory_id' => '3'
        ]);
        Product::create([
            'name'=>'Druppelstop',
            'price' => '122.43',
            'image_paths' => '',
            'description' => 'Onderdeel',
            'product_catogory_id' => '3'
        ]);
        Product::create([
            'name'=>'Electrische pomp',
            'price' => '478.59',
            'image_paths' => '',
            'description' => 'Onderdeel',
            'product_catogory_id' => '3'
        ]);
        Product::create([
            'name'=>'Tandwiel 110mm',
            'price' => '5.45',
            'image_paths' => '',
            'description' => 'Onderdeel',
            'product_catogory_id' => '3'
        ]);
        Product::create([
            'name'=>'Tandwiel 70mm',
            'price' => '5.25',
            'image_paths' => '',
            'description' => 'Onderdeel',
            'product_catogory_id' => '3'
        ]);
        Product::create([
            'name'=>'Maalmotor',
            'price' => '119.20',
            'image_paths' => '',
            'description' => 'Onderdeel',
            'product_catogory_id' => '3'
        ]);
        Product::create([
            'name'=>'Zeef',
            'price' => '28.80',
            'image_paths' => '',
            'description' => 'Onderdeel',
            'product_catogory_id' => '3'
        ]);
        Product::create([
            'name'=>'Reinigingtabletten',
            'price' => '3.45',
            'image_paths' => '',
            'description' => 'Onderdeel',
            'product_catogory_id' => '3'
        ]);
        Product::create([
            'name'=>'Reinigingborsteltjes',
            'price' => '3.45',
            'image_paths' => '',
            'description' => 'Onderdeel',
            'product_catogory_id' => '3'
        ]);
        Product::create([
            'name'=>'Ontkalkingspijp',
            'price' => '21.70',
            'image_paths' => '',
            'description' => 'Onderdeel',
            'product_catogory_id' => '3'
        ]);
    }
}
