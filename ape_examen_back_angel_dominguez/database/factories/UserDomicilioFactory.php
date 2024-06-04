<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserDomicilio>
 */
class UserDomicilioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'domicilio' => fake()->streetAddress,
        'numero_exterior' => fake()->buildingNumber,
        'colonia' => fake()->secondaryAddress,
        'cp' => fake()->postcode,
        'ciudad' => fake()->city,
        ];
    }
}
