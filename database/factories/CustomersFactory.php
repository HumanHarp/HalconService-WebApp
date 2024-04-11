<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customers>
 */
class CustomersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'customer_name' =>$this->faker->word(),
            'company_name' =>$this->faker->word(),
            'fiscal_data' =>$this->faker->word(),
            'delivery_address' =>$this->faker->word()

        ];
    }
}
