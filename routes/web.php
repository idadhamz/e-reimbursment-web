<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FinanceController;
use App\Http\Controllers\HRController;
use App\Http\Controllers\KaryawanController;

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
    return view('welcome');
});

Route::group([], function(){
    route::get('/dashboard', [DashboardController::class, 'index']); 
});

// Karyawan
Route::group([], function(){

    Route::prefix('requestReim')->group(function(){
        route::get('', [KaryawanController::class, 'index']);
        route::get('create', [KaryawanController::class, 'create']);
        route::get('edit', [KaryawanController::class, 'edit']);
    });

    Route::prefix('trackReim')->group(function(){
        Route::get('', [KaryawanController::class, 'indexTrack']);
        Route::get('view', [KaryawanController::class, 'viewTrack']);
    });
});

// HR
Route::group([], function(){

    Route::prefix('persetujuanReimHR')->group(function(){
        route::get('', [HRController::class, 'index']);
        route::get('verifikasi', [HRController::class, 'verifikasi']);
    });
});

// Finance
Route::group([], function(){

    Route::prefix('persetujuanReimFinance')->group(function(){
        route::get('', [FinanceController::class, 'index']);
        route::get('verifikasi', [FinanceController::class, 'verifikasi']);
    });
    
    Route::prefix('pengembalianDana')->group(function(){
        route::get('', [FinanceController::class, 'indexDana']);
        route::get('create', [FinanceController::class, 'createDana']);
    });
});