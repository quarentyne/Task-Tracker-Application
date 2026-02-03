<?php

namespace App\Console\Commands;

use App\Models\Scopes\TaskScope;
use App\Models\Task;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class GenerateRecurringTasks extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:generate-recurring-tasks';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate daily tasks';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $tasks = Task::withoutGlobalScope(TaskScope::class)
            ->where('recurring', 1)
            ->where('created_at', '<', Carbon::today())
            ->groupBy('title', 'description', 'user_id', 'category_id', 'recurring')
            ->get(['title', 'description', 'user_id', 'category_id', 'recurring'])
            ->map(fn ($task) => [
                'title' => $task->title,
                'description' => $task->description,
                'user_id' => $task->user_id,
                'category_id' => $task->category_id,
                'recurring' => $task->recurring,
                'created_at' => now(),
                'updated_at' => now(),
                'due_date' => now()->addDay()->toDateString(),
            ]);

        foreach ($tasks as $task) {
            try {
                $taskDoesntExist = Task::withoutGlobalScope(TaskScope::class)
                    ->where('title', $task['title'])
                    ->where('description', $task['description'])
                    ->where('user_id', $task['user_id'])
                    ->where('category_id', $task['category_id'])
                    ->where('due_date', now()->addDay()->toDateString(). ' 00:00:00')
                    ->doesntExist();

                if($taskDoesntExist) Task::insert($task);

                $this->info('All recurring tasks have been generated.');
            } catch (\ErrorException $e) {
                $this->error($e->getMessage());
            }
        }
    }
}
