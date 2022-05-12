<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;

//Admin Routes
Route::get('/', function () { return view('welcome'); })->name('welcome');
Route::get('/dashboard', function () { return view('admin.dashboard'); });
Route::get('/categories', [CategoryController::class,'index'])->name('categories');
Route::post('/categories/create',[CategoryController::class,'create'])->name('categories.create');
Route::post('/categories/update',[CategoryController::class,'update'])->name('categories.update');
Route::post('/categories/delete',[CategoryController::class,'delete'])->name('categories.delete');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.homepage');
    })->name('admin.dashboard');
});
