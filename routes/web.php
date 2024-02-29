<?php

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
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/koleksi', [HomeController::class, 'koleksi'])->name('koleksi');
Route::get('/katalogbuku', [HomeController::class, 'katalogbuku'])->name('katalogbuku');
Route::get('/surat', [HomeController::class, 'surat'])->name('surat');
Route::get('/detailkoleksi', [HomeController::class, 'detailkoleksi'])->name('detailkoleksi');

// Routes for AdminController


Route::prefix('dashboardd')->group(function () {
    Route::get('/koleksipameran', [LoginController::class, 'koleksipameran'])->name('koleksipameran');
});

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
    });
    });
    
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});






