<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductDetail;
use App\Models\Product;

class ProductDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
 public function index()
    {
     $details= ProductDetail::with('product')->get();
     return view('backend.productdetail.index',compact('details'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = Product::all();
        return view('backend.productdetail.add', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     */
   public function store(Request $request)
{
    $validated = $request->validate([
        'product_id' => 'required|unique:product_details,product_id', // correct table name
        'specifications' => 'required|string|max:255',
        'warranty' => 'required|string|max:255',
        'manufacturer' => 'required|string',
    ]);

    ProductDetail::create($validated);

    return redirect()->route('productdetail.index')
                     ->with('success', 'Product details created successfully.');
}

    /**
     * Display the specified resource.
     */


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductDetail $productDetail)
    {

        $products = Product::all();
        return view('backend.product_details.edit', compact('productDetail', 'products'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProductDetail $productDetail)
    {
        $validated = $request->validate([
        'product_id' => 'required|unique:product_details,product_id',
        'specifications' => 'nullable|string',
        'warranty' => 'nullable|string',
        'manufacturer' => 'nullable|string',
       ]);

         ProductDetail::update($validated);
            return redirect()->route('product_details.index')->with('success', 'Product details update successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        ProductDetail::find($id)->delete();
        return redirect()->route('product_details.index')->with('success', 'Product details deleted successfully.');
    }
}
