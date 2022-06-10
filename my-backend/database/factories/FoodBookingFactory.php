<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FoodBookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'food_name' => $this->faker->unique()->randomElement(["Pork Sisig", "Liempo", "Pork Laroca", "Buttered Shrimp", "Chicken Cordon Bleu", "Calamares", "Beef Pares", "Fish Fillet", "Fried Chicken", "Beef Curry"]),
            'price' => $this->faker->numberBetween(100, 500),
            'quantity' => $this->faker->numberBetween(1, 20),
            'cust_name' => $this->faker->name,
            'phone_number' => $this->faker->numerify('09#########')
        ];
    }
}
