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

Route::get('/dashboard', function () {
    return view('backend.app');
})->name('dashboard');

Route::get('/maintenance', function() {
return view('backend.pages.error.maintenance');
})->name('maintenance');

Route::get('/error', function() {
return view('backend.pages.error.404-error');
})->name('error');

Route::get('/sign', function() {
return view('backend.pages.authentication.sign-in');
})->name('sign');

Route::get('/signUp', function() {
return view('backend.pages.authentication.sign-up');
})->name('signUp');

Route::get('/forget', function() {
return view('backend.pages.authentication.forget-password');
})->name('forgetPassword');

Route::get('/reset', function() {
return view('backend.pages.authentication.reset-password');
})->name('resetPassword');

Route::get('/otp', function() {
return view('backend.pages.authentication.otp');
})->name('otp');

Route::get('/blank', function() {
return view('backend.pages.blank');
})->name('blank');