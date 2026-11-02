<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CustomersController;


Route::get('/', function () {
    return view('welcome');
});

//crud categories
Route::get('/categories', [CategoriesController::class, 'index'])->name('categories.index');
Route::get('/categories/create', [CategoriesController::class, 'create'])->name('categories.create');
Route::post('/categories', [CategoriesController::class, 'store'])->name('categories.store');
Route::get('/categories/{id}/edit', [CategoriesController::class, 'edit'])->name('categories.edit');
Route::put('/categories/{id}/update', [CategoriesController::class, 'update'])->name('categories.update');
Route::delete('/categories/{id}', [CategoriesController::class, 'destroy'])->name('categories.destroy');

//crud customers
Route::get('/customers', [CustomersController::class, 'index'])->name('customers.index');
Route::get('/customers/create', [CustomersController::class, 'create'])->name('customers.create');
Route::post('/customers', [CustomersController::class, 'store'])->name('customers.store');
Route::get('/customers/{id}/edit', [CustomersController::class, 'edit'])->name('customers.edit');
Route::put('/customers/{id}/update', [CustomersController::class, 'update'])->name('customers.update');
Route::delete('/customers/{id}', [CustomersController::class, 'destroy'])->name('customers.destroy');
