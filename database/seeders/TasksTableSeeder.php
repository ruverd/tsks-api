<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;

class TasksTableSeeder extends Seeder
{
    public function run()
    {
        Task::truncate();

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 50; $i++) {
            Task::create([
                'title' => $faker->sentence,
                'description' => $faker->paragraph,
                'status' => $faker->boolean($chanceOfGettingTrue = 90),
            ]);
        }
    }
}
