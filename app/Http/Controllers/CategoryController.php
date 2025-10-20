<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class CategoryController extends Controller
{
    public function index(): View
    {
        $categories = auth()->user()->categories;

        return view('category.index', compact('categories'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:2|max:255',
        ]);

        Category::create([
            'name' => $validated['name'],
            'user_id' => auth()->id(),
        ]);
    }

    public function show(Category $category)
    {
        Gate::authorize('view', $category);
    }

    public function edit(Category $category)
    {
        Gate::authorize('update', $category);
    }

    public function update(Request $request,Category $category)
    {
        Gate::authorize('update', $category);

        $validated = $request->validate([
            'name' => 'required|min:2|max:255',
        ]);

        $category->update($validated);
    }

    public function destroy(Category $category)
    {
        Gate::authorize('delete', $category);

        $category->delete();

        return redirect()->back()->with('success', 'Category was successfully deleted');
    }
}
