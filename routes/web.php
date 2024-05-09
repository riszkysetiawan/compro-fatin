<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BannerSliderController;

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
Route::get('/slider-admin', [BannerSliderController::class, 'index'])->name('slider');

Route::get('/create-slider', function () {
    return view('admin.backend.slider.tambah');
})->name('tambah.slider');

Route::post('/simpan-slider', [BannerSliderController::class, 'store'])->name('simpan.slider');
Route::delete('/delete-slider/{id}', [BannerSliderController::class, 'destroy'])->name('delete.slider');
Route::get('/slider/{id}/edit', [BannerSliderController::class, 'edit'])->name('slider.edit');
Route::put('/slider/{id}', [BannerSliderController::class, 'update'])->name('slider.update');
