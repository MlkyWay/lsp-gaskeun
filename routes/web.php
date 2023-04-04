<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PaketWisataController;


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

// Route::get('/dashboard', function () {
//     return view('dashboard.welcome');
// });
Route::get('/dashboard', [DashboardController::class, 'index']);
// Route::get('/login', function () {
//     return view('authentikasi.login');
// });

Route::get('/register', function () {
    return view('authentikasi.register');
});

Route::get('/tables', function () {
    return view('user.index');
});

Route::get('/karyawan', [KaryawanController::class, 'index'])->name('karyawan.index');

Route::get('/tables', function () {
    return view('user.profile');
});

Route::middleware('guest')->group(function () {
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::get('registrasi', [AuthController::class, 'register'])->name('register');
    Route::post('login/authentikasi', [AuthController::class, 'authenticate'])->name('login.authentikasi');
    Route::post('registrasi/authentikasi', [AuthController::class, 'registrasi'])->name('register.authentikasi');
});

Route::middleware('auth')->group(function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::get('/paketwisata',[PaketWisataController::class , 'getDataPariwisata'])->name('paketwisata');