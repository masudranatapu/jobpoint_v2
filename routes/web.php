<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// admin
use App\Http\Controllers\Admin\DashboardController;

// user
use App\Http\Controllers\User\InformationController;

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

Route::get('/', [HomeController::class, 'welcome'])->name('home');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['as' => 'admin.', 'prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    // organizations
    Route::get('/organizations', [DashboardController::class, 'organizations'])->name('organizations');
    // jobs
    Route::get('/jobs', [DashboardController::class, 'jobs'])->name('jobs');
    // candidates
    Route::get('/candidates', [DashboardController::class, 'candidates'])->name('candidates');
});

Route::group(['as' => 'user.', 'prefix' => 'user', 'middleware' => ['auth', 'user']], function () {
    Route::get('/information', [InformationController::class, 'information'])->name('dashboard');
});