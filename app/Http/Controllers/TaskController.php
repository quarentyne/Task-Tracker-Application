<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskStoreRequest;
use App\Http\Requests\TaskUpdateRequest;
use App\Models\Category;
use App\Models\Task;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class TaskController extends Controller
{
    public function index(Request $request): View
    {
        $query = Task::query();

        if($request->get('q')) {
            $requestQuery = $request->get('q');

            $query->where(function ($query) use ($requestQuery) {
                $query->where('title', 'like', "%{$requestQuery}%")
                    ->orWhere('description', 'like', "%{$requestQuery}%");
            });
        }

        $tasks = $query->where('user_id', auth()->id())
            ->with('category')
            ->orderByRaw('CASE WHEN completed_at IS NULL THEN 0 ELSE 1 END')
            ->orderBy('due_date', 'asc')
            ->get();

        return view('task.index', compact('tasks'));
    }

    public function create(): View
    {
        $categories = Category::all()->where('user_id', auth()->id())->pluck('name', 'id');

        return view('task.create', compact('categories'));
    }

    public function store(TaskStoreRequest $request): RedirectResponse
    {
        $taskData = $request->validated();

        Task::create([
            'title' => $taskData['title'],
            'description' => $taskData['description'],
            'due_date' => $taskData['due_date'],
            'category_id' => $taskData['category_id'],
            'user_id' => auth()->id(),
        ]);

        return redirect(route('task.list'))->with('success', 'Task created successfully!');
    }

    public function show(Task $task): View
    {
        Gate::authorize('view', $task);

        return view('task.show', compact('task'));
    }

    public function edit(Task $task): View
    {
        Gate::authorize('view', $task);

        $categories = Category::all()->where('user_id', auth()->id())->pluck('name', 'id');

        return view('task.edit', compact('task', 'categories'));
    }

    public function update(TaskUpdateRequest $request, Task $task): RedirectResponse
    {
        $taskData = $request->validated();

        $task->update($taskData);

        return redirect(route('task.list'))->with('success', 'Task updated successfully!');
    }

    public function destroy(Task $task): RedirectResponse
    {
        Gate::authorize('delete', $task);

        $task->delete();

        return redirect(route('task.list'))->with('success', 'Task deleted successfully!');
    }

    public function complete(Task $task): RedirectResponse
    {
        $task->completed_at = isset($task->completed_at) ? null : Carbon::now();

        $task->save();

        return Redirect::back()->with('success', 'Task status changed successfully!');
    }
}
