<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::group(['middleware' => 'auth'], function () {
Route::get('/', [BookController::class, 'index'])->name('index');

Route::get('/add', [BookController::class, 'add'])->name('add');

Route::post('/store', [BookController::class, 'store'])->name('store');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
