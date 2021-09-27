<?php

use App\Http\Controllers\InicioController;
use App\Http\Controllers\ManualController;
use App\Http\Controllers\PrincipalController;
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

Route::get('/', InicioController::class);
Route::get('/principal', [PrincipalController::class, 'Principal']);
Route::get('/manual/info_uno', [ManualController::class,'manual1']); 
Route::get('/manual/info_dos', [ManualController::class,'manual2']);
Route::get('/manual/info_tres',[ManualController::class,'manual3']);
Route::get('/manual/info_cuatro',[ManualController::class,'manual4']);
Route::get('/manual/info_cinco',[ManualController::class,'manual5']); 
Route::get('/manual/info_seis',[ManualController::class,'manual6']); 





