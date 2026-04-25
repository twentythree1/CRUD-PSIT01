<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\ProductsController;

Route::resource('products', ProductsController::class);

Route::get('/about', function () {
    return view('about');
})->name('about');