<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('backend.products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       $categories = Category::all();
        return view('backend.products.add',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */public function store(Request $request)
{
    // Validate input
    $validated = $request->validate([
        'heading' => 'required|string|max:255',
        'description' => 'required|string',
        'image' => 'required|image|mimes:jpg,png,webp|max:2048',
        'price' => 'required|numeric',
        'quantity' => 'required|numeric',
        'category_id' => 'required|exists:categories,id', // FIXED
        'subcategory' => 'nullable|string'
    ]);

    // Handle image upload
    if ($request->hasFile('image')) {
        $validated['image'] = $request->file('image')->store('products', 'public');
    }

    // Create product
    Product::create($validated);

    return redirect()->route('product.index')->with('success', 'Product added successfully!');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
     public function destroy($id)
    {
        Product::findOrFail($id)->delete();

        return redirect()->route('product.index')->with('success', 'product deleted successfully!');
    }

}