<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;

// Route::get('/', function () {
//    return view('welcome');
// });

// Route::get('/', [ProductController::class, 'index']);
// Route::get('/product/{id}', [ProductController::class, 'show']);

// Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
// Route::post('/user/store', [UserController::class, 'store'])->name('user.store');

// Route::get('/contact', [ContactController::class, 'create'])->name('contact.create');
// Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');

// Route::get('/admin/create', [AdminController::class, 'create'])->name('admin.create');
// Route::post('/admin/store', [AdminController::class, 'store'])->name('admin.store');

Route::get('/', function () {
    return view('home');
});

// Route::get('/about', function () {
//     return view('about');
// });
// Route::get('/contact', function () {
//     return view('contact');
// });
// Route::get('/gallery', function () {
//     return view('gallery');
// });