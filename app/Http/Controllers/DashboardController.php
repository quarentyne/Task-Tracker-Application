<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function __invoke(Request $request): View
    {
        $userId = auth()->id();
        $today = Carbon::today();
        $baseQuery = Task::where('user_id', $userId);

        $todayTasks = (clone $baseQuery)
            ->whereDate('due_date', $today)
            ->where('completed_at', null)
            ->with('category')
            ->limit(3)
            ->get();

        $tomorrowTasks = (clone $baseQuery)
            ->whereDate('due_date', Carbon::tomorrow())
            ->where('completed_at', null)
            ->with('category')
            ->limit(3)
            ->get();

        $completedTodayTasks = (clone $baseQuery)
            ->whereDate('completed_at', $today)
            ->count();

        $totalTodayTasks = (clone $baseQuery)
            ->whereDate('due_date', $today)
            ->count();

        $completedTotalTasks = (clone $baseQuery)
            ->whereNotNull('completed_at')
            ->count();

        $totalTasks = (clone $baseQuery)
            ->count();

        $expiredTotalTasks = (clone $baseQuery)
            ->whereDate('due_date', '<', $today)
            ->where('completed_at', null)
            ->count();

        $lastCompletedTasks = (clone $baseQuery)
            ->whereNotNull('completed_at')
            ->with('category')
            ->orderBy('completed_at', 'desc')
            ->limit(3)
            ->get();

        return view('dashboard', compact(
            'todayTasks',
            'tomorrowTasks',
            'completedTodayTasks',
            'totalTodayTasks',
            'completedTotalTasks',
            'totalTasks',
            'expiredTotalTasks',
            'lastCompletedTasks')
        );
    }
}
