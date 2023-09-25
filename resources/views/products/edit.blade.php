@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Product</h1>
        <form method="POST" action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name"><b>Name</b></label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" required>
            </div>
            <div class="form-group">
                <label for="price"><b>Price</b></label>
                <input type="number" class="form-control" id="price" name="price" step="0.01" value="{{ $product->price }}" required>
            </div>
            <div class="form-group">
                <label for="image"><b>Image</b></label><br>
                <input type="file" class="form-control-file" id="image" name="image" accept="image/*">
            </div><br>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
