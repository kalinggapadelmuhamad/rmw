<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

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

Route::prefix('login')->group(function () {
    Route::get('/', [LoginController::class, 'index'])->name('login');
    Route::get('company', [LoginController::class, 'indexCompany'])->name('login.company');
    Route::get('employes', [LoginController::class, 'indexEmployes'])->name('login.employes');
});

Route::prefix('register')->group(function () {
    Route::get('/', [RegisterController::class, 'index'])->name('register');
    Route::get('company', [RegisterController::class, 'indexCompany'])->name('register.company');
    Route::get('employes', [RegisterController::class, 'indexEmployes'])->name('register.employes');
});