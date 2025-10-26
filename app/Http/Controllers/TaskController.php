<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskStoreRequest;
use App\Http\Requests\TaskUpdateRequest;
use App\Models\Category;
use App\Models\Task;
use Carbon\Carbon;
use Illuminate\Auth\Access\Gate;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(): View
    {
        $tasks = auth()->user()->tasks();

        return view('tasks.index', compact('tasks'));
    }

    public function create(): View
    {
        $categories = Category::all()->where('user_id', auth()->id());

        return view('tasks.create', compact('categories'));
    }

    public function store(TaskStoreRequest $request)
    {
        $taskData = $request->validated();

        Task::create([
            'title' => $taskData['title'],
            'description' => $taskData['description'],
            'due_date' => $taskData['due_date'],
            'category_id' => $taskData['category_id'],
            'user_id' => auth()->id(),
        ]);

        return redirect(route('tasks.index'))->with('success', 'Task created successfully!');
    }

    public function show(Task $task): View
    {
        Gate::authorize('view', $task);

        return view('tasks.show', compact('task'));
    }

    public function edit(Task $task): View
    {
        Gate::authorize('view', $task);

        $categories = Category::all()->where('user_id', auth()->id());

        return view('tasks.edit', compact('task', 'categories'));
    }

    public function update(TaskUpdateRequest $request, Task $task)
    {
        $taskData = $request->validated();

        $task->update($taskData);

        return redirect(route('tasks.index'))->with('success', 'Task updated successfully!');
    }

    public function destroy(Task $task): View
    {
        Gate::authorize('delete', $task);

        $task->delete();

        return view('tasks.destroy', compact('task'))->with('success', 'Task deleted!');
    }

    public function complete(Task $task)
    {
        $task->completed_at = isset($task->completed_at) ? null : Carbon::now();

        $task->save();
    }
}
