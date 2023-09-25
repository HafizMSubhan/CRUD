@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>View Product</h1>
        <table class="table">
            <tr>
                <th>ID</th>
                <td>{{ $product->id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ $product->name }}</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>${{ number_format($product->price, 2) }}</td>
            </tr>
            <tr>
                <th>Created At</th>
                <td>{{ $product->created_at }}</td>
            </tr>
        </table>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Back to List</a>
    </div>
@endsection
