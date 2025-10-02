<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});



// Route::get('/', [HomeController::class, 'home'])->name('home');
// Route::get('/about', [HomeController::class, 'about'])->name('about');
// Route::get('/services', [HomeController::class, 'services'])->name('services');
// Route::get('/contacts', [HomeController::class, 'contacts'])->name('contacts');
// Route::get('/blog', [HomeController::class, 'blog'])->name('blog.index');
// Route::get('/blog/{slug}', [HomeController::class, 'blogBySlug'])->name('blog.show');
