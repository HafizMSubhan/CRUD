@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Product</h1>
        <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name"><b>Name</b></label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="price"><b>Price</b></label>
                <input type="number" class="form-control" id="price" name="price" step="0.01" required>
            </div><br>
            <div class="form-group">
                <label for="image"><b>Image</b></label><br>
                <input type="file" class="form-control-file" id="image" name="image" accept="image/*" required>
            </div><br>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
