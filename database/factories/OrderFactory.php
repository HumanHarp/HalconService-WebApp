<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Customers;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    
    public function definition(): array
    {

        $customers = Customers::first();

        return [
            'invoice_number' =>$this->faker->randomDigit(),
            'customer_number' =>$this->faker->randomDigit(),
            'fiscal_data' => $this->faker->randomDigit(),
            'customer_name' => $customers->customer_name,
            'company_name' => $customers->company_name,
            'delivery_address' => $customers->delivery_address,

        ];
    }
}
