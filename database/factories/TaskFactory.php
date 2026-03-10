<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Scrumboard;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->realText(20),
            'priority' => fake()->numberBetween(0, 5),
            'description' => fake()->realText(500),
            'status' => fake()->randomElement(['backlog', 'todo', 'doing', 'done']),
            'scrumboard_id' => Scrumboard::inRandomOrder()->first()->id,
        ];
    }
}
