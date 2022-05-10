<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name(),
            'content' => $this->faker->name(),
            'status' => 0,
            'topic_id' => Category::query()->inRandomOrder()->value('id'),
            'user_id' => User::query()->inRandomOrder()->value('id')
        ];
    }
}
