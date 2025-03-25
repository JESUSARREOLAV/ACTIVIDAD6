<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Product Creator</title>
</head>
<body>
@extends('layouts.app')

@section('content')
    <h1>Create Product</h1>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" required>
        
        <label for="price">Price:</label>
        <input type="number" name="price" step="0.01" required>

        <button type="submit">Save</button>
    </form>
@endsection

</body>
</html>