<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Http\Requests\StoreProductsRequest;
use App\Http\Requests\UpdateProductsRequest;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Products::paginate(8);
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductsRequest $request)
    {
        Products::create($request->validated());
        return redirect()->route('products.index')->with('success', 'Product created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id) {
        $product = Products::findOrFail($id);
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Products $product)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductsRequest $request, Products $product)
    {
        $product->update([
        'name' => $request->name,
        'description' => $request->description,
        'price' => $request->price,
    ]);
        return redirect()->route('products.index')->with('success', 'Product updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Products $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully!');
    }
}