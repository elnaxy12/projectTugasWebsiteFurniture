<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('frontend.home.app');
})->name('home');

Route::get('/about', function () {
    return view('frontend.about.app');
})->name('about');

Route::get('/products', function () {
    return view('frontend.products.app');
})->name('products');

Route::get('/testimonials', function () {
    return view('frontend.testimonials.app');
})->name('testimonials');

Route::get('/contact', function () {
    return view('frontend.contact.app');
})->name('contact');