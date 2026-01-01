@extends('frontend.layouts.app')
@section('content')
<h2>Your Cart</h2>
@if(session('success'))
 <div class="alert alert-success">{{ session('success') }}</div>
@endif
@if(!$cart || count($cart) == 0)
 <p>Your cart is empty.</p>
@else
<table class="table table-bordered">
 <thead>
 <tr>
 <th>Image</th>
 <th>Product</th>
 <th>Price</th>
 <th>Qty</th>
 <th>Total</th>
 <th>Action</th>
 </tr>
 </thead>
 <tbody>
 @php $grandTotal = 0; @endphp
 @foreach($cart as $item)
 @php $total = $item['price'] * $item['quantity']; $grandTotal += $total; @endphp
 <tr>
 <td><img src="{{ asset('uploads/' . $item['image']) }}" width="60"></td>
 <td>{{ $item['heading'] }}</td>
 <td>${{ $item['price'] }}</td>
 <td>
 <form action="{{ route('cart.update') }}" method="POST">
 @csrf
 <input type="hidden" name="id" value="{{ $item['id'] }}">
 <input type="number" name="quantity" value="{{ $item['quantity'] }}"
min="1" class="form-control" style="width:80px;">
 <button class="btn btn-sm btn-success mt-1">Update</button>
 </form>
 </td>
 <td>${{ $total }}</td>
 <td>
 <form action="{{ route('cart.remove') }}" method="POST">
 @csrf
 <input type="hidden" name="id" value="{{ $item['id'] }}">
 <button class="btn btn-sm btn-danger">Remove</button>
 </form>
 </td>
 </tr>
 @endforeach
 </tbody>
</table>
<h3>Grand Total: ${{ $grandTotal }}</h3>
<a href="{{ route('cart.clear') }}" class="btn btn-warning">Clear Cart</a>
@endif
@endsection
