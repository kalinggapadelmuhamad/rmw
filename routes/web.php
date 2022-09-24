<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HashingController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

// route view login 
Route::prefix('login')->group(function () {
    Route::get('/', [LoginController::class, 'index'])->name('login');
    Route::get('company', [LoginController::class, 'indexCompany'])->name('login.company');
    Route::get('employes', [LoginController::class, 'indexEmployes'])->name('login.employes');
});
Route::post('/logout', [LoginController::class, 'logout']);

//route auth
Route::prefix('auth')->group(function () {
    Route::post('company/login', [LoginController::class, 'companyLogin'])->name('company.login');
    Route::post('employes/login', [LoginController::class, 'employesLogin'])->name('employes.login');
    Route::post('company/register', [RegisterController::class, 'companyRegister'])->name('company.register');
    Route::post('employes/register', [RegisterController::class, 'employeeRegister'])->name('employee.register');
});

Route::prefix('register')->group(function () {
    Route::get('/', [RegisterController::class, 'index'])->name('register');
    Route::get('company', [RegisterController::class, 'indexCompany'])->name('register.company');
    Route::get('employes', [RegisterController::class, 'indexEmployes'])->name('register.employes');
});

Route::prefix('dashboard')->group(function () {
    Route::get('/trial', [DashboardController::class, 'index'])->name('dashboard.trial');
});

Route::get('/hashing', [HashingController::class, 'index'])->name('hashing');
