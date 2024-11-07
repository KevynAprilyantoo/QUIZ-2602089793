<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\WriterController;
use App\Http\Controllers\PostController;



// Route::get('/', function () {
//     return view('home');
// })->name('home');\

// Route::get('/category', function () {
//     return view('category');
// })->name('category');

// Route::get('/writer', function () {
//     return view('writer');
// })->name('writer');

// Route::get('/about', function () {
//     return view('about');
// })->name('about');

Route::get('/', [HomeController::class, 'homes'])->name('home');

Route::get('/category/{slug}', [categoryController::class, 'index'])->name('category');

Route::get('/writer', [WriterController::class, 'writers'])->name('writer');
Route::get('/writer/{id}', [WriterController::class, 'detail'])->name('writerdetail');

Route::get('/module/{slug}', [PostController::class, 'module'])->name('module');

Route::get('/popular', [PostController::class, 'isPopular'])->name('popular');


Route::view('/about', 'about')->name('about');




