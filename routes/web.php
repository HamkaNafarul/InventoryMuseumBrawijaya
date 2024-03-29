<?php

use App\Http\Controllers\KoleksiBukuControlller;
use App\Http\Controllers\KoleksiController;
use App\Http\Controllers\SuratControlller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

// Routes for HomeController


// Routes for AdminController


Route::prefix('dashboardd')->group(function () {
    Route::get('/koleksipameran', [LoginController::class, 'koleksipameran'])->name('koleksipameran');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/koleksi', [HomeController::class, 'koleksi'])->name('koleksi');
Route::get('/katalogbuku', [HomeController::class, 'katalogbuku'])->name('katalogbuku');
Route::get('/surat', [HomeController::class, 'surat'])->name('surat');
Route::prefix('surat')->group(function () {
    Route::post('/Form/store', [SuratControlller::class, 'store'])->name('store_surat');

});
Route::get('/detailkoleksi/{id}', [HomeController::class, 'detailkoleksi'])->name('detailkoleksi_landing');
Route::middleware(['guest'])->group(function(){
    Route::get('/login', [LoginController::class, 'viewLogin'])->name('login');
    Route::post('/login_proses', [LoginController::class, 'login_proses'])->name('login_proses');
    
    }
    );
Route::middleware(['auth'])->group(function(){
    Route::middleware(['auth','check.role:superAdmin'])->group(function(){
    Route::get('/dashboardd', [LoginController::class, 'dashboardd'])->name('dashboardd');
    Route::prefix('dashboardd')->group(function () {
        Route::get('/koleksipameran', [LoginController::class, 'koleksipameran'])->name('koleksipameran');
        Route::get('/koleksipameran/Form', [KoleksiController::class, 'create'])->name('Form');
        Route::post('/koleksipameran/Form/store', [KoleksiController::class, 'store'])->name('store');
        Route::get('/koleksipameran/FormEditKoleksi/edit/{id}', [KoleksiController::class, 'edit'])->name('edit');
        Route::put('/koleksipameran/FormEditKoleksi/edit/update/{id}', [KoleksiController::class, 'update'])->name('update.koleksi');
        Route::delete('/koleksipameran/FormDeleteKoleksi/delete/{id}', [KoleksiController::class, 'destroy'])->name('delete_kategori');
        Route::get('/koleksipameran/DetailKoleksiAdmin/{id}', [KoleksiController::class, 'DetailKoleksiAdmin'])->name('DetailKoleksiAdmin');
        Route::get('/koleksipameran/data', [KoleksiController::class, 'json'])->name('kategori_data');
    });
    Route::prefix('dashboardd')->group(function () {
            Route::get('/suratmasuk', [LoginController::class, 'suratmasuk'])->name('suratmasuk');
            Route::delete('/suratmasuk/FormDeleteSurat/delete/{id}', [SuratControlller::class, 'destroy'])->name('delete');
            Route::get('/suratmasuk/data', [SuratControlller::class, 'json'])->name('kategori_data');
        });
        Route::prefix('dashboardd')->group(function () {
            Route::get('/koleksipameran/DetailKoleksiAdmin/{id}', [KoleksiController::class, 'DetailKoleksiAdmin'])->name('DetailKoleksiAdmin');
            Route::get('/koleksibuku', [LoginController::class, 'koleksibuku'])->name('koleksibuku');
            Route::get('/koleksibuku/FormBuku', [KoleksiBukuControlller::class, 'create'])->name('FormBuku');
            Route::post('/koleksibuku/FormBuku/store', [KoleksiBukuControlller::class, 'store'])->name('store');
            Route::get('/koleksibuku/data', [KoleksiBukuControlller::class, 'json'])->name('kategori_data');
            Route::get('/koleksibuku/FormBukuEdit/edit/{id}', [KoleksiBukuControlller::class, 'edit'])->name('edit');
            Route::put('/koleksibuku/FormBukuEdit/edit/update/{id}', [KoleksiBukuControlller::class, 'update'])->name('update');
            Route::delete('/koleksibuku/FormDeleteKoleksiBuku/delete/{id}', [KoleksiBukuControlller::class, 'destroy'])->name('delete_kategori');
            Route::get('/koleksibuku/DetailKoleksiAdminBuku/{id}', [KoleksiBukuControlller::class, 'DetailKoleksiAdminBuku'])->name('DetailKoleksiAdminBuku');
        });
    });
    
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});






