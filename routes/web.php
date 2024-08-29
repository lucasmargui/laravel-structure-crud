<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\OrderController;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('materials')->group(function () {
    Route::get('/', [MaterialController::class, 'index'])->name('material.index');
    Route::get('/create', [MaterialController::class, 'create'])->name('material.create');
    Route::post('/create', [MaterialController::class, 'store'])->name('material.store'); 
    Route::get('/{id}', [MaterialController::class, 'show'])->name('material.show');
    Route::get('/{id}/edit', [MaterialController::class, 'edit'])->name('material.edit');
    Route::put('/{id}', [MaterialController::class, 'update'])->name('material.update');
    Route::delete('/{id}/delete', [MaterialController::class, 'destroy'])->name('material.destroy');
});


Route::prefix('orders')->group(function () {
    Route::get('/', [OrderController::class, 'index'])->name('order.index');
    Route::get('/create', [OrderController::class, 'create'])->name('order.create');
    Route::post('/create', [OrderController::class, 'store'])->name('order.store');
    Route::get('/{id}', [OrderController::class, 'show'])->name('order.show');
    Route::get('/{id}/edit', [OrderController::class, 'edit'])->name('order.edit');
    Route::put('/{id}', [OrderController::class, 'update'])->name('order.update');
    Route::delete('/{id}/delete', [OrderController::class, 'destroy'])->name('order.destroy');
});


