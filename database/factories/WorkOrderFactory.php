<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\WorkOrder;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\WorkOrder>
 */
class WorkOrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = WorkOrder::class;

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
            'workorder_id' =>$this->generateRandomString(),
            'products_worked_on'=>json_encode('{"products_worked_on": "Barroc intens light"}'),
            'parts_used'=>json_encode('{"parts_used": "15"}'),
            'description'=>'Lorem ipsum dolor sit',
            'user_id'=>'2',
            'company_id'=>random_int( $min, $max),
            'note'=>'Lorem ipsum dolor sit amet.',
            'when'=>date(now()),
            'location'=>'curio',
        ];
    }

    function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return "barroc-" . $randomString;
    }
}
