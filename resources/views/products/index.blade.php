@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-12 col-xl-10">
        <!-- Success Message -->
        @include('partials.scs')
        <div class="d-flex justify-content-between align-items-center mb-4 pb-3 border-bottom">
            <div>
                <h2 class="fw-bold mb-2">products</h2>
                <p class="text-muted mb-0">Manage your products here.</p>
            </div>
            <a href="{{ route('products.create') }}" class="btn btn-success">
                Add New Product
            </a>
        </div>
    </div>

    <table class="table table-striped table-hover table-bordered border border-dark-subtle">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Price</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($products as $product)
            <tr>
                <th scope="row">{{ $product->id }}</th>
                <td>{{ $product->name }}</td>
                <td>{{ Str::limit($product->description, 30) }}</td>
                <td>₱{{ number_format($product->price, 2) }}</td>
                <td class="d-flex">
                    <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary me-2">Show</a>
                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning me-2">Edit</a>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="m-0">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger me-2"
                            onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center">No products found!</td>
            </tr>
            @endforelse
        </tbody>
    </table>
    <div class="d-flex justify-content-end mt-4">
        {{ $products->links() }}
    </div>
</div>
@endsection