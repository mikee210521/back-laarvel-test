<?php

namespace Database\Factories;

use App\Models\User;
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
            'user_id' => User::factory(),
            'domicilio' => $this->faker->streetAddress,
            'numero_exterior' => $this->faker->buildingNumber,
            'colonia' => $this->faker->city,
            'cp' => $this->faker->postcode,
            'ciudad' => $this->faker->city,
        ];
    }
}
