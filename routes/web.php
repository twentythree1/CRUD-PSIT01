<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\ProductsController;

Route::get('/products', [ProductsController::class, 'index']);


Route::resource('products', ProductsController::class);