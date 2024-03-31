<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tasks = [
            [
                'user_id' => 1,
                'name' => 'Task 1'
            ],
            [
                'user_id' => 1,
                'name' => 'Task 2'
            ]
        ];

        foreach($tasks as $task){
            Task::insert($task);
        }
    }
}
