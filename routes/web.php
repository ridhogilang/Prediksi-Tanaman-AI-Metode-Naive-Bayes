<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PrediksiController;
use App\Http\Middleware\CheckRoleOne;

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/kadar-tanah', 'kadar')->name('kadar');
    Route::get('/tanaman', 'tanaman')->name('tanaman');
    Route::get('/tutorial', 'tutorial')->name('tutorial');
    Route::get('/team', 'team')->name('team');
});

Route::controller(PrediksiController::class)->group(function () {
    Route::get('prediksi', 'index')->name('prediksi.view')->middleware('auth');
    Route::get('reset-session', 'resetSession')->name('reset.session');
    Route::post('prediksi', 'predict')->name('predict');
});

Route::controller(LoginController::class)->group(function () {
    Route::get('login', 'index')->name('login')->middleware('guest');
    Route::post('login', 'authenticate')->name('authenticate');
    Route::post('/logout', 'logout')->name('logout');
    Route::get('registrasi', 'registrasi')->name('registrasi.view')->middleware('guest');
    Route::post('registrasi', 'addRegistrasi')->name('registrasi');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/datatraining', [AdminController::class, 'datatraining'])->name('datatraining')->middleware('role');
    Route::post('/tambahdata', [AdminController::class, 'adddata'])->name('datatraining.tambah');
    Route::delete('/deletedata/{id}', [AdminController::class, 'deletedata'])->name('datatraining.delete');
    Route::get('/datatesting', [AdminController::class, 'datatesting'])->name('datatesting');
    Route::get('/registrasiadmin', [AdminController::class, 'registrasiadmin'])->name('registrasi.admin');
});