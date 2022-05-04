<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'username' => $this->faker->userName(),
            'password' => $this->faker->password(),
            'email' => $this->faker->email,
            'google_id' => $this->faker->randomDigit(),
            'remember_token' => $this->faker->randomDigit()
        ];
    }
}
