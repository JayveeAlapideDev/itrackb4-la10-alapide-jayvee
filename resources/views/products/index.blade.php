@extends('layouts.app')

@section('title', 'All Products')
@section('content')

<div class="d-flex justify-content-between align-items-center mb-3">
 <h3>Products</h3>
    

<a href="{{ route('products.create') }}" class="btn btn-primary">+Add Product</a>
</div>
 
 

<nav>
   <h3>BRAND</h3>
   <a href="{{ route('products.index') }}">ALL</a> |
@foreach ($brands as $brand)
   <a href="{{ route('products.index', ['brand_id' => $brand->id]) }}">{{ strtoupper($brand->name) }}</a> |
@endforeach
</nav>

<nav>
   <h3>PACKAGE</h3>
        <a href="{{ route('products.index') }}">ALL</a> |
        <a href="{{ route('products.index',['package' => 'bottle' ]) }}">BOTTLED</a> |
        <a href="{{ route('products.index',['package' => 'plastic' ]) }}">PLASTIC</a> |
        <a href="{{ route('products.index',['package' => 'pack' ]) }}">PACK</a> |
        <a href="{{ route('products.index',['package' => 'sachet' ]) }}">SACHET</a> |
        <a href="{{ route('products.index',['package' => 'stick' ]) }}">STICK</a> |
</nav>


    <table class="table table-borderd table-striped" border="1" cellpadding="8">
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Stock</th>
            <th>Brand</th>
            <th>Package</th>
        </tr>
 
        @foreach ($products as $product)
            <tr>
                <td><a href="{{ route('products.show', $product['id'])}}"> {{ $product['name']}}</a></td>
                <td>{{ $product['price'] }}</td>
                <td>{{ $product['stock'] }}</td>
                <td>{{ $product->brand->name }}</td>
                <td>{{ $product['package'] }}</td>
                
            </tr>
        @endforeach
    </table>
 
@endsection


