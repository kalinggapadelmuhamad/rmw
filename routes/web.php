<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HashingController;
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

// router login
Route::prefix('login')->group(function () {
    Route::get('/', [LoginController::class, 'index'])->name('login');
    Route::get('company', [LoginController::class, 'indexCompany'])->name('login.company');
    Route::get('employes', [LoginController::class, 'indexEmployes'])->name('login.employes');
});

//auth
Route::prefix('auth')->group(function () {
    Route::post('company/login', [LoginController::class, 'companyLogin'])->name('company.login');
});

Route::prefix('register')->group(function () {
    Route::get('/', [RegisterController::class, 'index'])->name('register');
    Route::get('company', [RegisterController::class, 'indexCompany'])->name('register.company');
    Route::get('employes', [RegisterController::class, 'indexEmployes'])->name('register.employes');
});

Route::get('/company', function () {
    return view('dashboard.dashboard-company');
})->name('dashboard.company');

Route::get('/employee', function () {
    return view('dashboard.dashboard-employee');
});

Route::get('/company/trial', function () {
    return view('company-trial.company-trial');
});

Route::get('/employee/trial', function () {
    return view('employee-trial.employee-trial');
});

Route::get('/hashing', [HashingController::class, 'index'])->name('hashing');
