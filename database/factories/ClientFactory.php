<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'firstname' => $this->faker->lastName(),
            'lastname' => $this->faker->firstName(),
            'email' => $this->faker->unique()->safeEmail(),
        ];
    }
}
