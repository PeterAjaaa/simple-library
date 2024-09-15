<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BookController::class, 'index'])->name('index');

Route::get('/add', [BookController::class, 'add'])->name('add');

Route::post('/store', [BookController::class, 'store'])->name('store');
