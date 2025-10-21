<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

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

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => [
                'required',
                'min:2',
                'max:255',
                Rule::unique('categories', 'name')->where(function ($query) {
                    return $query->where('user_id', auth()->id());
                }),
            ],
        ]);

        Category::create([
            'name' => $validated['name'],
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('categories.list')->with('success', 'Category ' . $validated['name'] . ' was successfully created');
    }

    public function show(Category $category)
    {
        Gate::authorize('view', $category);
    }

    public function edit(Category $category)
    {
//        Gate::authorize('update', $category);

        return view('category.edit', compact('category'));
    }

    public function update(Request $request,Category $category)
    {
        Gate::authorize('update', $category);

        $validated = $request->validate([
            'name' => [
                'required',
                'min:2',
                'max:255',
                Rule::unique('categories', 'name')->where(function ($query) {
                    return $query->where('user_id', auth()->id());
                }),
            ],
        ]);

        $category->update($validated);

        return redirect()->route('categories.list')->with('success', 'Category ' . $validated['name'] . ' was successfully edited');
    }

    public function destroy(Category $category)
    {
        Gate::authorize('delete', $category);

        $category->delete();

        return redirect()->back()->with('success', 'Category was successfully deleted');
    }
}
