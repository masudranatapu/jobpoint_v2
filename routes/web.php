<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// admin
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LocationsController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\JobTypeController;
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
    Route::get('/job-types', [DashboardController::class, 'jobTypes'])->name('job.types');
    // candidates
    Route::get('/candidates', [DashboardController::class, 'candidates'])->name('candidates');
    // categories
    Route::get('/categories', [DashboardController::class, 'categories'])->name('categories');
    // currencies
    Route::get('/currencies', [DashboardController::class, 'currencies'])->name('currencies');
    // departments
    // designations
    Route::get('/designations', [DashboardController::class, 'designations'])->name('designations');
    // experience
    Route::get('/experience', [DashboardController::class, 'experience'])->name('experience');
    // industries
    Route::get('/industries', [DashboardController::class, 'industries'])->name('industries');
    // locations
    Route::resource('locations', LocationsController::class);
    Route::resource('departments', DepartmentController::class);
    Route::resource('jobs-type', JobTypeController::class);
    // sallary 
    Route::get('/salary-types', [DashboardController::class, 'salaryTypes'])->name('salary.types');
    // skills
    Route::get('/skills', [DashboardController::class, 'skills'])->name('skills');
    // general
    Route::get('/general', [DashboardController::class, 'general'])->name('general');
});

Route::group(['as' => 'user.', 'prefix' => 'user', 'middleware' => ['auth', 'user']], function () {
    Route::get('/information', [InformationController::class, 'information'])->name('dashboard');
});
