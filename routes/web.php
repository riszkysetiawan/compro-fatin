<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BannerSliderController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthController;
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
})->name('home');
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



// login
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login-admin', [AuthController::class, 'login'])->name('masuk');
Route::get('/logout-admin', [AuthController::class, 'logout'])->name('logout');


Route::middleware(['superadmin'])->group(function () {
    // crud user
    Route::get('/user-admin', [UserController::class, 'index'])->name('user.index');
    Route::get('/create-user', function () {
        return view('admin.backend.user.tambah');
    })->name('tambah.user');
    Route::post('/simpan-user', [UserController::class, 'store'])->name('simpan.user');
    Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/user/{id}', [UserController::class, 'update'])->name('user.update');
    Route::delete('/delete-user/{id}', [UserController::class, 'destroy'])->name('delete.user');
});


Route::middleware(['auth'])->group(function () {
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
    Route::get('/teams-admin', [TeamController::class, 'index'])->name('team.index');
    Route::get('/create-team-admin', [TeamController::class, 'create'])->name('tambah.team');
    Route::post('/simpan-team', [TeamController::class, 'store'])->name('simpan.team');
    Route::put('/team/{id}', [TeamController::class, 'update'])->name('team.update');
    Route::get('/team/{id}/edit', [TeamController::class, 'edit'])->name('team.edit');
    Route::delete('/delete-team/{id}', [TeamController::class, 'destroy'])->name('delete.team');


    // crud user
    Route::get('/user-admin', [UserController::class, 'index'])->name('user.index');
    Route::get('/create-user', function () {
        return view('admin.backend.user.tambah');
    })->name('tambah.user');
    Route::post('/simpan-user', [UserController::class, 'store'])->name('simpan.user');
    Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/user/{id}', [UserController::class, 'update'])->name('user.update');
    Route::delete('/delete-user/{id}', [UserController::class, 'destroy'])->name('delete.user');

    // crud profile
    Route::get('/profile-admin', [ProfileController::class, 'index'])->name('profile.index');
    Route::get('/profile-edit', [ProfileController::class, 'edit'])->name('edit.profile');
    Route::put('/profile/update', [ProfileController::class, 'updateProfile'])->name('profile.update');
});
