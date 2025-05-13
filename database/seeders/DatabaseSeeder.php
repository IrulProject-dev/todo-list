<?php

namespace Database\Seeders;

use App\Models\daily_progres;
use App\Models\task;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $users = User::factory(10)->create();

        foreach ($users as $user) {
            // Buat tanggal acak dalam 30 hari terakhir
            $randomDate = now()->subDays(rand(0, 30))->toDateString();

            // Buat daily_progres untuk user
            $dailyProgress = daily_progres::create([
                'user_id' => $user->id,
                'date' => $randomDate,
                'total_task' => 0,
                'completed_tasks' => 0,
                'percentage' => 0,
            ]);

            // Buat 4 task untuk user dan hubungkan ke daily_progres
            $tasks = Task::factory(4)->create([
                'user_id' => $user->id,
                'daily_progress_id' => $dailyProgress->id,
                'created_at' => $randomDate, // Set tanggal acak untuk task
                'updated_at' => $randomDate,
            ]);

            // Update daily_progres dengan data task
            $dailyProgress->update([
                'total_task' => $tasks->count(),
                'completed_tasks' => $tasks->where('completed', true)->count(),
                'percentage' => $tasks->count() > 0
                    ? round(($tasks->where('completed', true)->count() / $tasks->count()) * 100, 2)
                    : 0,
            ]);
        }
    }
}
