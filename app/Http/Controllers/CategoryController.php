<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
   // Display all categories
    public function index()
    {
        $categories = Category::all();
        return view('backend.category.index', compact('categories'));
    }

    // Show create form
    public function create()
    {
        return view('backend.category.add');
    }

    // Store new category
    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required|string|max:255',
            'subcategory' => 'nullable|string|max:255',
        ]);

        Category::create($request->only('category', 'subcategory'));

        return redirect()->route('category.index')->with('success', 'Category created successfully!');
    }

    // Show edit form
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('backend.category.edit', compact('category'));
    }

    // Update category
    public function update(Request $request, $id)
    {
        $request->validate([
            'category' => 'required|string|max:255',
            'subcategory' => 'nullable|string|max:255',
        ]);

        $category = Category::findOrFail($id);
        $category->update($request->only('category', 'subcategory'));

        return redirect()->route('category.index')->with('success', 'Category updated successfully!');
    }

    // Delete category
    public function destroy($id)
    {
        Category::findOrFail($id)->delete();

        return redirect()->route('category.index')->with('success', 'Category deleted successfully!');
    }
}
