<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
     // Show cart page
 public function index()
 {
 $cart = session()->get('cart', []);
 return view('cart.index', compact('cart'));
 }


 // Add product to cart
 public function addToCart(Request $request, $id)
 {
 $product = Product::findOrFail($id);
 $cart = session()->get('cart', []);
 // If item exists, increase quantity
 if (isset($cart[$id])) {
 $cart[$id]['quantity']++;
 } else {
 // Add new item
 $cart[$id] = [
 "id" => $product->id,
 "heading" => $product->heading,
 "image" => $product->image,
 "price" => $product->price,
 "quantity" => 1
 ];
 }
 session()->put('cart', $cart);
 return back()->with('success', 'Product added to cart!');
 }


 // Update cart item quantity
 public function updateCart(Request $request)
 {
 if ($request->id && $request->quantity) {
 $cart = session()->get('cart');
 $cart[$request->id]["quantity"] = $request->quantity;
 session()->put('cart', $cart);
 }
 return back()->with('success', 'Cart updated!');
 }


 // Remove single item
 public function removeItem(Request $request)
 {
 $cart = session()->get('cart');
 if (isset($cart[$request->id])) {
 unset($cart[$request->id]);
 session()->put('cart', $cart);
 }

 return back()->with('success', 'Item removed!');
 }


 // Clear entire cart
 public function clearCart()
 {
 session()->forget('cart');
 return back()->with('success', 'Cart cleared!');
 }


}

