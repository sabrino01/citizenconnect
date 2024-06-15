<?php

use App\Http\Controllers\ImpotController;
use App\Http\Controllers\PermisController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/services', function () {
    return view('welcome');
});

Route::get('/citizenconnect', function () {
    return view('citizenconnect.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/service_impots', [App\Http\Controllers\ImpotController::class, 'service_impots'])->name('service_impots');

Route::get('/service_impot', [App\Http\Controllers\ImpotController::class, 'impots'])->name('impots');

Route::get('/service_permis', [App\Http\Controllers\PermisController::class, 'service_permis'])->name('service_permis');

Route::get('/service_permi', [App\Http\Controllers\PermisController::class, 'permis'])->name('permis');

Route::get('/login_impots', [App\Http\Controllers\ImpotController::class, 'login_impots'])->name('login_impots');

Route::get('/login_permis', [App\Http\Controllers\PermisController::class, 'login_permis'])->name('login_permis');

Route::get('/register_impots', [App\Http\Controllers\ImpotController::class, 'register_impots'])->name('register_impots');

Route::get('/register_permis', [App\Http\Controllers\PermisController::class, 'register_permis'])->name('register_permis');

Route::post('/register_impots', [App\Http\Controllers\ImpotController::class, 'add_register'])->name('add_register');

Route::post('/register_permis', [App\Http\Controllers\PermisController::class, 'add_register_permis'])->name('add_register_permis');

Route::resource('impots', ImpotController::class);

Route::resource('permis', PermisController::class);
