<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('categories', CategoryController::class)->names([
        'index' => 'categories.list',
        'store' => 'categories.store',
        'create' => 'categories.create',
        'edit' => 'categories.edit',
        'update' => 'categories.update',
    ]);

    Route::resource('tasks', CategoryController::class)->names([
        'index' => 'categories.list',
        'store' => 'categories.store',
        'create' => 'categories.create',
        'edit' => 'categories.edit',
        'update' => 'categories.update',
    ]);

    Route::post('/tasks/{task}/complete', [TaskController::class, 'complete'])->name('task.complete');
    Route::resource('tasks', TaskController::class)->names([
        'index' => 'task.list',
        'store' => 'task.store',
        'create' => 'task.create',
        'edit' => 'task.edit',
        'update' => 'task.update',
        'destroy' => 'task.destroy',
        'show' => 'task.show',
    ]);
});

require __DIR__.'/auth.php';
