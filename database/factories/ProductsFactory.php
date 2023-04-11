<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'productName' => fake()->randomElement($array = array ("Hotdog","Footlong","Burger")) ,
            'label' => fake()->randomElement($array = array ("Jumbo 1kg ","Big 1 kg","20 pcs small")) ,
            'price' => fake()->numberBetween(20,1000),
            'quantity' => fake()->numberBetween(1,100),
        ];
    }
}
