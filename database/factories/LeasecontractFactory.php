<?php

namespace Database\Factories;

use App\Models\leasecontract;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Leasecontract>
 */
class LeasecontractFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Leasecontract::class;
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
            "agreed_rules"=>'Lorem ipsum dolor sit amet.',
            "pay_method"=>'Maandelijks',
            "prijs"=>'900',
            "product"=>'Barroc Intens',
            "status"=>'Betaald',
            "firstname"=>$this->faker->firstname,
            "lastname"=>$this->faker->lastname
        ];
    }
}
