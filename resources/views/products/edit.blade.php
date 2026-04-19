@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h2 class="mb-0">Edit Product</h2>
                    <p>Update the product details.</p>
                </div>
            </div>

            <div class="card">
                <div class="card-body p-4">
                    <form action="{{ route('products.update', $product->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <label for="name" class="form-label">Product Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                value="{{ old('name', $product->name) }}" name="name" id="name" placeholder="Enter product name"
                                autofocus>
                            @error('name')
                            <span class="invalid-feedback">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="description" class="form-label">Product Description</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" id="description"
                                rows="8" placeholder="Enter product description..." name="description">
                                {{ old('description', $product->description) }}
                            </textarea>
                            @error('description')
                            <span class="invalid-feedback">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="price" class="form-label">Product Price</label>
                            <input type="number" class="form-control @error('price') is-invalid @enderror" id="price"
                                value="{{ old('price', $product->price) }}" placeholder="Enter product price (₱)" name="price" step="0.25">
                            @error('price')
                            <span class="invalid-feedback">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                        <div class="d-flex gap-2 justify-content-end">
                            <button type="submit" class="btn btn-outline-primary">Save Changes</button>
                            <button type="button" class="btn btn-danger" onclick="window.history.back()">Cancel</button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection