<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DenahrakController;
use App\Http\Controllers\KapsrakController;
use App\Http\Controllers\KapsmaterialController;
use App\Http\Controllers\IncomingController;

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

Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// Group routes that require authentication
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('/denahrak', DenahrakController::class);
    Route::resource('/kapsrak', KapsrakController::class);
    Route::get('/kapsrak/delete/{id}', [KapsrakController::class, 'delete']);
    Route::resource('/kapsmaterial', KapsmaterialController::class);

    // Kedatangan material
    Route::get('/kedatanganmaterial', [IncomingController::class, 'index']);
    Route::get('/kedatanganmaterial/show/{id}', [IncomingController::class, 'show']);
    Route::get('/kedatanganmaterial/delete/{id}', [IncomingController::class, 'delete']);
    Route::post('/kedatanganmaterial/import_excel', [IncomingController::class, 'importExcel']);
    Route::get('/calendar-data', [IncomingController::class, 'getIncomingData']);

    Route::get('/edit/{qty}', [KapsmaterialController::class, 'edit'])->name('kapsmaterial.edit');
    Route::put('/kapsmaterial/update/{qty}', [KapsmaterialController::class, 'update'])->name('kapsmaterial.update');
    Route::get('/kapsmaterial/delete/{id}', [KapsmaterialController::class, 'delete'])->name('kapsmaterial.delete');
    Route::get('/kapsrak/getdata', [KapsrakController::class, 'getdata'])->name('kapsrak.getdata');
    
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});