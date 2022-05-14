<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\HomepageController;

//Admin Routes
Route::get('/', function () { return view('welcome'); })->name('welcome');
Route::get('/dashboard', function () { return view('admin.dashboard'); });
Route::get('/categories', [CategoryController::class,'index'])->name('categories');
Route::post('/categories/create',[CategoryController::class,'create'])->name('categories.create');
Route::post('/categories/update',[CategoryController::class,'update'])->name('categories.update');
Route::post('/categories/delete',[CategoryController::class,'delete'])->name('categories.delete');


Route::get('/articles', [ArticleController::class,'index'])->name('article.index');
Route::get('/articles/view/{id}', [ArticleController::class,'show'])->name('article.view');
Route::get('/articles/create', [ArticleController::class,'create'])->name('article.create');
Route::get('/articles/edit/{id}', [ArticleController::class,'edit'])->name('article.edit');
Route::post('/articles/store',[ArticleController::class,'store'])->name('article.store');
Route::put('/articles/update/{id}',[ArticleController::class,'update'])->name('article.update');
Route::delete('/articles/delte/{id}',[ArticleController::class,'destroy'])->name('article.delete');



//User Routes
Route::get('/anasayfa', [HomepageController::class,'index'])->name('user.homepage');
Route::get('/post/{id}', [HomepageController::class,'show'])->name('post.view');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.homepage');
    })->name('admin.dashboard');
});

