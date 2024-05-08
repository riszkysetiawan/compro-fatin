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
    return view('frontend.home');
});
Route::get('/about-us', function () {
    return view('frontend.about');
});
Route::get('/portofolio-us', function () {
    return view('frontend.portofolio');
});
Route::get('/contact', function () {
    return view('frontend.contact');
});
Route::get('/services', function () {
    return view('frontend.services');
});
Route::get('/login', function () {
    return view('admin.login.login');
});
Route::get('/dashboard-admin', function () {
    return view('admin.dashboard.index');
});
Route::get('/slider-admin', function () {
    return view('admin.backend.slider.index');
})->name('slider');
