<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product View</title>
</head>
<body>
@extends('layouts.app')

@section('content')
    <h1>Products</h1>

    <a href="{{ route('products.create') }}" class="btn btn-primary">Add Product</a>

    <ul>
        @foreach ($products as $product)
            <li>{{ $product->name }} - ${{ $product->price }}</li>
        @endforeach
    </ul>
@endsection

</body>
</html>