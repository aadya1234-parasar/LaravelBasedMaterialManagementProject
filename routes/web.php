<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\TransactionController;

Route::get('/', fn() => redirect('/materials'));

// Category Routes
Route::resource('categories', CategoryController::class);

// Material Routes
Route::resource('materials', MaterialController::class);

// Transaction Routes
Route::get('transactions/create', [TransactionController::class, 'create'])->name('transactions.create');
Route::post('transactions', [TransactionController::class, 'store'])->name('transactions.store');

// Manage Materials View
Route::get('/manage', [MaterialController::class, 'manage'])->name('materials.manage');

/* Code Author: AADYA PARASAR */
