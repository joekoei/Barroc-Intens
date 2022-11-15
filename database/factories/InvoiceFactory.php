<?php

namespace Database\Factories;

use App\Models\Invoice;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoice>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $min = 1;
        $max = 191;
        return [
                "company_id"=>random_int( $min, $max),
                "date"=>$this->faker->date,
                "paid_at"=>$this->faker->date,
                "naam_klant"=>$this->faker->firstname,
                "achternaam_klant"=>$this->faker->lastname,
                "gemaakte_afspraken"=>'Lorem ipsum dolor sit amet.',
                "prijs"=>'700'
        ];
    }
}
