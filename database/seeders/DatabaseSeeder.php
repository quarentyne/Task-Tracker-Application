<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Task;
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
        $users = User::all();
        $categories = Category::all();

        if ($users->isEmpty() || $categories->isEmpty()) {
            $users = User::factory(5)->create();
            $categories = Category::factory(5)->create();
        }

        Task::factory(5)->make()->each(function ($task) use ($users, $categories) {
            $task->user_id = $users->random()->id;
            $task->category_id = $categories->random()->id;
            $task->save();
        });
    }
}
