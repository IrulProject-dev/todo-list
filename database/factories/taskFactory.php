<?php

namespace Database\Factories;

use App\Models\daily_progres;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\task>
 */
class taskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::all()->random()->id,
            'title' => fake()->sentence,
            'description' => fake()->paragraph,
            'completed' => fake()->boolean,
            'daily_progress_id' => daily_progres::all()->random()->id,
        ];
    }
}
