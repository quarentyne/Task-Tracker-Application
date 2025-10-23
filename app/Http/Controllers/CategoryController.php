<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryStoreRequest;
use App\Http\Requests\CategoryUpdateRequest;
use App\Models\Category;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Gate;

class CategoryController extends Controller
{
    public function index(): View
    {
        $categories = auth()->user()->categories;

        return view('category.index', compact('categories'));
    }

    public function create(): View
    {
        return view('category.create');
    }

    public function store(CategoryStoreRequest $request): RedirectResponse
    {
        $categoryData = $request->validated();

        Category::create([
            'name' => $categoryData['name'],
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('categories.list')->with('success', 'Category ' . $categoryData['name'] . ' was successfully created');
    }

    public function show(Category $category)
    {
        Gate::authorize('view', $category);
    }

    public function edit(Category $category)
    {
        Gate::authorize('update', $category);

        return view('category.edit', compact('category'));
    }

    public function update(CategoryUpdateRequest $request,Category $category)
    {
        $categoryData = $request->validated();

        $category->update($categoryData);

        return redirect()->route('categories.list')->with('success', 'Category ' . $categoryData['name'] . ' was successfully edited');
    }

    public function destroy(Category $category)
    {
        Gate::authorize('delete', $category);

        $category->delete();

        return redirect()->back()->with('success', 'Category was successfully deleted');
    }
}
