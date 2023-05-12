<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'form' => $this->faker->numberBetween(1, 4),
            'name' => $this->faker->name(),
            'admno' => $this->faker->unique()->numberBetween(1000, 2000),
            'gender' =>  $this->faker->randomElement(['M', 'F']),
            'kcpe' => $this->faker->numberBetween(200, 400),
        ];
    }
}
