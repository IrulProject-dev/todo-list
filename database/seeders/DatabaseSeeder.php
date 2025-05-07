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
     
     User::factory(10)->create();
     Task::factory(10)->create();
     daily_progres::factory(10)->create();
    }
}
