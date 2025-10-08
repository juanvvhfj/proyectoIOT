<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    ContactController,
    StationController,
    SensorController,
    DashboardController,
    DataApiController,

};
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

Route::get('/', [DashboardController::class, 'index'])->name('home'); // o 'dashboard'

Route::get('/', [DashboardController::class,'index'])->name('dashboard');
Route::resource('stations', StationController::class)->only(['index','create','store']);
Route::resource('sensors',  SensorController::class)->only(['index','create','store']);
Route::get('/telemetry', [DataApiController::class,'series'])->name('api.telemetry'); 
