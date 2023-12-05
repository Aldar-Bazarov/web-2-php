<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;

Route::get('/doc', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [IndexController::class, 'index'])->name('index');

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/rubric/{id}', [IndexController::class, 'rubric'])->name('rubric');
Route::get('/statya/{id}', [IndexController::class, 'statya'])->name('statya');

Route::get('/add', [AdminController::class, 'add'])->name('add');
Route::post('/add', [AdminController::class, 'update'])->name('update');
Route::delete('/delete/{id}', [AdminController::class, 'delete'])->name('delete');