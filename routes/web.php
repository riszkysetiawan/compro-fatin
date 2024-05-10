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
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\DetailServicesController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\PortofolioPageController;
use App\Http\Controllers\ContactController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [AboutUsController::class, 'index'])->name('about');
Route::get('/portofolio-us', [PortofolioPageController::class, 'index'])->name('portofolio.page');

Route::get('/contact', function () {
    return view('frontend.contact');
});
Route::get('/services/foto-product', function () {
    return view('frontend.services.fotoproduk');
});

// contact user
Route::post('/simpan-contact-user', [ContactController::class, 'storeuser'])->name('simpan.contact.user');

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
    Route::put('/portofolio/{id}', [PortofolioController::class, 'update'])->name('update.portofolio');
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

    // crud services
    Route::get('/services-admin', [ServicesController::class, 'index'])->name('services.index');
    Route::get('/create-services-admin', [ServicesController::class, 'create'])->name('tambah.services');
    Route::post('/simpan-services', [ServicesController::class, 'store'])->name('simpan.services');
    Route::put('/services/{id}', [ServicesController::class, 'update'])->name('services.update');
    Route::get('/services/{id}/edit', [ServicesController::class, 'edit'])->name('services.edit');
    Route::delete('/delete-services/{id}', [ServicesController::class, 'destroy'])->name('delete.services');

    // crud contact admin
    Route::get('/contact-admin', [ContactController::class, 'index'])->name('contact.index');
    Route::get('/create-contact-admin', [ContactController::class, 'create'])->name('tambah.contact');
    Route::post('/simpan-contact', [ContactController::class, 'store'])->name('simpan.contact');
    Route::put('/contact/{id}', [ContactController::class, 'update'])->name('update.contact');
    Route::get('/contact/{id}/edit', [ContactController::class, 'edit'])->name('contact.edit');
    Route::delete('/delete-contact/{id}', [ContactController::class, 'destroy'])->name('delete.contact');

    // crud foto dan detail services
    Route::get('/detail-services-admin', [DetailServicesController::class, 'index'])->name('detailservices.index');
});
