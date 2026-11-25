<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producteur>
 */
class ProducteurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom'=>$this->faker->company,
            'adresse'=>$this->faker->streetAddress,
            'codePostal'=>$this->faker->postcode,
            'ville'=>$this->faker->city,
        ];
    }
}
