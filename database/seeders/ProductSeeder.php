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
            'product_catogory_id' => '1'
        ]);
        Product::create([
            'name'=>'Barroc Intens Italian',
            'price' => '599',
            'image_paths' => 'img/machine-bit-light.png',
            'description' => 'S234KNDPF',
            'product_catogory_id' => '1'
        ]);
        Product::create([
            'name'=>'Barroc Intens Italian Deluxe',
            'price' => '799',
            'image_paths' => 'img/machine-bit-deluxe.png',
            'description' => 'S234NNBMV',
            'product_catogory_id' => '1'
        ]);
        Product::create([
            'name'=>'Barroc Intens Italian Deluxe Special',
            'price' => '999',
            'image_paths' => 'img/machine-bit-deluxe.png',
            'description' => 'S234MMPLA',
            'product_catogory_id' => '1'
        ]);
        Product::create([
            'name'=>'Espresso Beneficio',
            'price' => '21,60',
            'image_paths' => 'img/koffieboon.png',
            'description' => 'Een toegankelijke en zachte koffie. Hij is afkomstig van de Finca El Limoncillo, een weelderige plantage aan de rand van het regenwoud in de Matagalpa regio in Nicaragua.',
            'product_catogory_id' => '2'
        ]);
        Product::create([
            'name'=>'Yellow Bourbon Brasil',
            'price' => '23,20',
            'image_paths' => 'img/koffieboon.png',
            'description' => 'Koffie van de oorspronkelijke koffiestruik (de Bourbon) met gele koffiebessen. Deze zeldzame koffie heeft de afgelopen 20 jaar steeds meer erkenning gekregen en vele prijzen gewonnen.',
            'product_catogory_id' => '2'
        ]);
        Product::create([
            'name'=>'Espresso Roma',
            'price' => '20,80',
            'image_paths' => 'img/koffieboon.png',
            'description' => 'Een Italiaanse espresso met een krachtig karakter en een aromatische afdronk.',
            'product_catogory_id' => '2'
        ]);
        Product::create([
            'name'=>'Red Honey Hondarus',
            'price' => '27,80',
            'image_paths' => 'img/koffieboon.png',
            'description' => 'De koffie is geproduceerd volgens de honey-methode. Hierbij wordt de koffieboon in haar vruchtvlees gedroogd, waardoor de zoete fruitsmaak diep in de boon trekt. Dit levert een éxtra zoete koffie op.',
            'product_catogory_id' => '2'
        ]);
    }
}
