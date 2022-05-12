<?php

use Illuminate\Support\Facades\Route;

//Admin Routes
Route::get('/', function () { return view('welcome');
})->name('welcome');
Route::get('/dashboard', function () { return view('admin.dashboard');
});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.homepage');
    })->name('admin.dashboard');
});
