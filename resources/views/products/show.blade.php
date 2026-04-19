@extends('layouts.app')

@section('content')
<div class="container mt-5 pt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h2 class="text-dark-emphasis m-0 mb-1">View Product</h2>
                </div>
                <a href="{{ route('products.index') }}" class="btn btn-warning">
                    Back to Products
                </a>
            </div>

            <div class="card">
                <div class="card-body p-4">
                    <div class="mb-4 pb-3 border-bottom" style="border-color: #30363d !important;">
                        <label class="text-muted text-uppercase small mb-2" style="font-size: 0.75rem; letter-spacing: 0.05em;">Name</label>
                        <h3 class="text-muted m-0">{{ $product->name }}</h3>
                    </div>

                    <div class="mb-4">
                        <label class="text-muted text-uppercase small mb-2" style="font-size: 0.75rem; letter-spacing: 0.05em;">Description</label>
                        <p class="text-dark-emphasis mb-0" style="line-height: 1.7; white-space: pre-wrap;">{{ $product->description }}</p>
                    </div>

                    <div class="mb-4">
                        <label class="text-muted text-uppercase small mb-2" style="font-size: 0.75rem; letter-spacing: 0.05em;">Price</label>
                        <p class="text-primary mb-0" style="font-size: 1.25rem; font-weight: bold;">${{ number_format($product->price, 2) }}</p>
                    </div>

                    <div class="pt-3 border-top" style="border-color: #30363d !important;">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <small class="text-muted d-block">Created At</small>
                                <small class="text-dark-emphasis">
                                    {{ $product->created_at?->diffForHumans() }}
                                </small>
                            </div>
                            <div class="col-md-6">
                                <small class="text-muted d-block">Last Updated</small>
                                <small class="text-dark-emphasis">
                                    {{ $product->updated_at?->diffForHumans() }}
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection