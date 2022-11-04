<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name'=>'Barroc Intens Italian Light',
            'price' => '499',
            'image_paths' => 'img/machine-bit-light.png',
            'description' => 'S234FREKT',
            'product_catogory_id' => '1',
            'stock' => '2'
        ]);
        Product::create([
            'name'=>'Barroc Intens Italian',
            'price' => '599',
            'image_paths' => 'img/machine-bit-light.png',
            'description' => 'S234KNDPF',
            'product_catogory_id' => '1',
            'stock' => '2'
        ]);
        Product::create([
            'name'=>'Barroc Intens Italian Deluxe',
            'price' => '799',
            'image_paths' => 'img/machine-bit-deluxe.png',
            'description' => 'S234NNBMV',
            'product_catogory_id' => '1',
            'stock' => '2'
        ]);
        Product::create([
            'name'=>'Barroc Intens Italian Deluxe Special',
            'price' => '999',
            'image_paths' => 'img/machine-bit-deluxe.png',
            'description' => 'S234MMPLA',
            'product_catogory_id' => '1',
            'stock' => '2'
        ]);
        Product::create([
            'name'=>'Espresso Beneficio',
            'price' => '21.60',
            'image_paths' => 'img/koffieboon.png',
            'description' => 'Een toegankelijke en zachte koffie. Hij is afkomstig van de Finca El Limoncillo, een weelderige plantage aan de rand van het regenwoud in de Matagalpa regio in Nicaragua.',
            'product_catogory_id' => '2',
            'stock' => '2'
        ]);
        Product::create([
            'name'=>'Yellow Bourbon Brasil',
            'price' => '23.20',
            'image_paths' => 'img/koffieboon.png',
            'description' => 'Koffie van de oorspronkelijke koffiestruik (de Bourbon) met gele koffiebessen. Deze zeldzame koffie heeft de afgelopen 20 jaar steeds meer erkenning gekregen en vele prijzen gewonnen.',
            'product_catogory_id' => '2',
            'stock' => '2'
        ]);
        Product::create([
            'name'=>'Espresso Roma',
            'price' => '20.80',
            'image_paths' => 'img/koffieboon.png',
            'description' => 'Een Italiaanse espresso met een krachtig karakter en een aromatische afdronk.',
            'product_catogory_id' => '2',
            'stock' => '2'
        ]);
        Product::create([
            'name'=>'Red Honey Hondarus',
            'price' => '27.80',
            'image_paths' => 'img/koffieboon.png',
            'description' => 'De koffie is geproduceerd volgens de honey-methode. Hierbij wordt de koffieboon in haar vruchtvlees gedroogd, waardoor de zoete fruitsmaak diep in de boon trekt. Dit levert een éxtra zoete koffie op.',
            'product_catogory_id' => '2',
            'stock' => '2'
        ]);


        Product::create([
            "name"=>"Rubber (10 mm)",
            "price"=>"0.39",
            "image_paths"=>"img/koffieboon.png",
            "description"=>"",
            "product_catogory_id"=>"3",
            "stock"=>2
        ]);

        Product::create([
            "name"=>"Rubber (14 mm)",
            "price"=>"0.45",
            "image_paths"=>"img/koffieboon.png",
            "description"=>"",
            "product_catogory_id"=>"3",
            "stock"=>2
        ]);

        Product::create([
            "name"=>"Slang",
            "price"=>"4.45",
            "image_paths"=>"img/koffieboon.png",
            "description"=>"",
            "product_catogory_id"=>"3",
            "stock"=>2
        ]);


        Product::create([
            "name"=>"Voeding (elektra)",
            "price"=>"68.69",
            "image_paths"=>"img/koffieboon.png",
            "description"=>"",
            "product_catogory_id"=>"3",
            "stock"=>2
        ]);


        Product::create([
            "name"=>"Ontkalker",
            "price"=>"4.00",
            "image_paths"=>"img/koffieboon.png",
            "description"=>"",
            "product_catogory_id"=>"3",
            "stock"=>2
        ]);

        Product::create([
            "name"=>"Waterfilter",
            "price"=>"299.45",
            "image_paths"=>"img/koffieboon.png",
            "description"=>"",
            "product_catogory_id"=>"3",
            "stock"=>2
        ]);

        Product::create([
            "name"=>"Reservoir Sensor",
            "price"=>"89.99",
            "image_paths"=>"img/koffieboon.png",
            "description"=>"",
            "product_catogory_id"=>"3",
            "stock"=>2
        ]);

        Product::create([
            "name"=>"Druppelstop",
            "price"=>"122.43",
            "image_paths"=>"img/koffieboon.png",
            "description"=>"",
            "product_catogory_id"=>"3",
            "stock"=>2
        ]);

        Product::create([
            "name"=>"Electrische pomp",
            "price"=>"478.59",
            "image_paths"=>"img/koffieboon.png",
            "description"=>"",
            "product_catogory_id"=>"3",
            "stock"=>2
        ]);

        Product::create([
            "name"=>"Tandwiel 110mm",
            "price"=>"5.45",
            "image_paths"=>"img/koffieboon.png",
            "description"=>"",
            "product_catogory_id"=>"3",
            "stock"=>2
        ]);

        Product::create([
            "name"=>"Tandwiel 70mm",
            "price"=>"5.25",
            "image_paths"=>"img/koffieboon.png",
            "description"=>"",
            "product_catogory_id"=>"3",
            "stock"=>2
        ]);

        Product::create([
            "name"=>"Maalmotor",
            "price"=>"119.20",
            "image_paths"=>"img/koffieboon.png",
            "description"=>"",
            "product_catogory_id"=>"3",
            "stock"=>2
        ]);

        Product::create([
            "name"=>"Zeef",
            "price"=>"28.80",
            "image_paths"=>"img/koffieboon.png",
            "description"=>"",
            "product_catogory_id"=>"3",
            "stock"=>2
        ]);

        Product::create([
            "name"=>"Reinigingstabletten",
            "price"=>"3.45",
            "image_paths"=>"img/koffieboon.png",
            "description"=>"",
            "product_catogory_id"=>"3",
            "stock"=>2
        ]);

        Product::create([
            "name"=>"Reiningsborsteltjes",
            "price"=>"8.45",
            "image_paths"=>"img/koffieboon.png",
            "description"=>"",
            "product_catogory_id"=>"3",
            "stock"=>2
        ]);

        Product::create([
            "name"=>"Ontkalkingspijp",
            "price"=>"21.70",
            "image_paths"=>"img/koffieboon.png",
            "description"=>"",
            "product_catogory_id"=>"3",
            "stock"=>2
        ]);
    }
}
