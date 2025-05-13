<?php

namespace Database\Factories;

use App\Models\task;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\daily_progres>
 */
class daily_progresFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */


    public function definition(): array
    {

        return [
            'user_id' =>User::all()->random()->id,
            'task_id' => task::all()->random()->id,
            'date' => fake()->dateTimeThisYear,
            'total_task' => fake()->numberBetween(1, 10),
            'completed_tasks' => fake()->numberBetween(0, 10),
            'percentage' => fake()->numberBetween(0, 100),
        ];
    }
}
