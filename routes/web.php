<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\UbmController;
use Illuminate\Support\Facades\Auth;



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
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/pasien', [PasienController::class, 'index']);
Route::get('/pasien/form', [PasienController::class, 'create']);
Route::post('/pasien/store', [PasienController::class, 'store']);
Route::get('/pasien/edit/{id}', [PasienController::class, 'edit']);
Route::put('/pasien/{id}', [PasienController::class, 'update']);
Route::delete('/pasien/{id}', [PasienController::class, 'destroy']);

Route::get('/ubm', [UbmController::class, 'index']);
Route::get('/ubm/form', [UbmController::class, 'create']);
Route::post('/ubm/store', [UbmController::class, 'store']);
Route::get('/ubm/edit/{id}', [UbmController::class, 'edit']);
Route::put('/ubm/{id}', [UbmController::class, 'update']);
Route::delete('/ubm/{id}', [UbmController::class, 'destroy']);
