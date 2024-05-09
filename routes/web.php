<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BannerSliderController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\ClientController;
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



// crud slider
Route::get('/slider-admin', [BannerSliderController::class, 'index'])->name('slider');
Route::get('/create-slider', function () {
    return view('admin.backend.slider.tambah');
})->name('tambah.slider');
Route::post('/simpan-slider', [BannerSliderController::class, 'store'])->name('simpan.slider');
Route::delete('/delete-slider/{id}', [BannerSliderController::class, 'destroy'])->name('delete.slider');
Route::get('/slider/{id}/edit', [BannerSliderController::class, 'edit'])->name('slider.edit');
Route::put('/slider/{id}', [BannerSliderController::class, 'update'])->name('slider.update');

// crud katetegori
Route::get('/kategori-admin', [KategoriController::class, 'index'])->name('kategori.index');
Route::get('/create-kategori', function () {
    return view('admin.backend.kategori.tambah');
})->name('tambah.kategori');
Route::post('/simpan-kategori', [KategoriController::class, 'store'])->name('simpan.kategori');
Route::get('/kategori/{id}/edit', [KategoriController::class, 'edit'])->name('kategori.edit');
Route::put('/kategori/{id}', [KategoriController::class, 'update'])->name('kategori.update');
Route::delete('/delete-kategori/{id}', [KategoriController::class, 'destroy'])->name('delete.kategori');

// crud user
Route::get('/user-admin', [UserController::class, 'index'])->name('user.index');
Route::get('/create-user', function () {
    return view('admin.backend.user.tambah');
})->name('tambah.user');
Route::post('/simpan-user', [UserController::class, 'store'])->name('simpan.user');
Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::put('/user/{id}', [UserController::class, 'update'])->name('user.update');
Route::delete('/delete-user/{id}', [UserController::class, 'destroy'])->name('delete.user');

// crud portofolio
Route::get('/portofolio-admin', [PortofolioController::class, 'index'])->name('portofolio.index');
Route::get('/create-portofolio-admin', [PortofolioController::class, 'create'])->name('tambah.portofolio');
Route::post('/simpan-portofolio', [PortofolioController::class, 'store'])->name('simpan.portofolio');
Route::put('/user/{id}', [PortofolioController::class, 'update'])->name('portofolio.update');
Route::get('/portofolio/{id}/edit', [PortofolioController::class, 'edit'])->name('portofolio.edit');
Route::delete('/delete-portofolio/{id}', [PortofolioController::class, 'destroy'])->name('delete.portofolio');

// crud client
Route::get('/client-admin', [ClientController::class, 'index'])->name('client.index');
Route::get('/create-client-admin', [ClientController::class, 'create'])->name('tambah.client');
Route::post('/simpan-client', [ClientController::class, 'store'])->name('simpan.client');
Route::put('/client/{id}', [ClientController::class, 'update'])->name('client.update');
Route::get('/client/{id}/edit', [ClientController::class, 'edit'])->name('client.edit');
Route::delete('/delete-client/{id}', [ClientController::class, 'destroy'])->name('delete.client');

// crud teams
