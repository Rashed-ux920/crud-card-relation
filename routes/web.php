<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\maincontroller;
use App\Http\Controllers\ProductController;
use App\Models\product;
use Illuminate\Support\Facades\Route;

Route::get('/', [maincontroller::class, 'index'])->name('market');

Route::get('/product', [ProductController::class,'index'])->name('product');

Route::get('/addproduct', [ProductController::class, 'create'])->name('addproduct');

Route::post('/addproduct',[ProductController::class, 'store'])->name('storproduct');


Route::get('/product/cart',[CartController::class, 'index'])->name('cart');
