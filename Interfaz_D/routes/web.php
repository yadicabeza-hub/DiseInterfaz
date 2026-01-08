<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Web Design Exercises Routes
Route::get('/landing', function () {
    return view('landing');
})->name('landing');

Route::get('/form-design', function () {
    return view('form_design');
})->name('form_design');

Route::get('/dashboard-design', function () {
    return view('dashboard_design');
})->name('dashboard_design');

Route::resource('products', App\Http\Controllers\ProductController::class);
Route::resource('categories', App\Http\Controllers\CategoryController::class);

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\UserAdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/users', [App\Http\Controllers\UserAdminController::class, 'users'])->name('users');
});
