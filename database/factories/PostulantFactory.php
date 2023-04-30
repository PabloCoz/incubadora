<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Postulant>
 */
class PostulantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fullname' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'validated' => $this->faker->boolean(),
            'country' => $this->faker->country(),
            'city' => $this->faker->city(),
            'phone' => $this->faker->phoneNumber(),
            'district' => $this->faker->streetName(),
            'description' => $this->faker->text(),
            'code' => $this->faker->unique()->numberBetween(100000, 999999),
        ];
    }
}
