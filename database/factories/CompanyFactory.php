<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "name" => $this->faker->name(),
            "phone"=> $this->faker->phoneNumber(),
            "street"=>$this->faker->streetName(),
            "house_number"=>$this->faker->randomDigit(),
            "city"=>$this->faker->city(),
            "country_code"=>"NL",
            "bkr_checked"=>date_create('now')->format('Y-m-d H:i:s'),
        ];
    }
}
