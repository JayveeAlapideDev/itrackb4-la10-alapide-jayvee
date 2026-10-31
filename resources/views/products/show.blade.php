@extends('layouts.app')

@section('title', $products['name'])
@section('content')

<h1>Stocks Status</h1>
<h3>Jayvee Alapide</h3>
<header class="bg-white">
 <h1>{{$products['name'] }}</h1>

        <p>Price {{$products['price'] }}</p>
        <p>Stock {{$products['stock'] }}</p>
        <p>Brand {{$products['brand']->name }}</p>
        <p>Package {{$products['package'] }}</p>
</header>
          <p><a href="{{ route('products.index') }}" class="btn btn-secondary">Back</a></p>-
@endsection