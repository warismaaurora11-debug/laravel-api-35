<?php

use Illuminate\Http\Request;
use App\Http\Controllers\API\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\KategoriController;

/* Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum'); */

Route::get('/product', [ProductController::class,'index'])->name('product.index');
// Route::post('/product', [ProductController::class,'store'])->name('product');
Route::post('/product', [ProductController::class, 'store'])->name('product.store');
Route::put('/product/{product}', [ProductController::class, 'update'])
    ->name('product.update');
Route::delete('/product/{product}', [ProductController::class, 'destroy'])->name('product.destroy');
Route::get('/kategori', [KategoriController::class, 'index'])
    ->name('kategori.index');
Route::post('/kategori', [KategoriController::class, 'store'])
    ->name('kategori.store');
Route::put('/kategori/{kategori}', [KategoriController::class, 'update'])
    ->name('kategori.update');
Route::delete('/kategori/{kategori}', [KategoriController::class, 'destroy'])
    ->name('kategori.destroy');

/* Route::get('/product', [ProductController::class, 'index'])->name('product.index');
Route::post('/product', [ProductController::class, 'store'])->name('product.store');
Route::put('/product/{id}', [ProductController::class, 'update'])->name('product.update'); */