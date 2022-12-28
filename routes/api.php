<?php

use App\Http\Controllers\API\Auth\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

//BAHASA OSING
Route::post('addbahasaosing', [AuthController::class, 'createBahasaOsing']);
Route::get('bahasaosing', [AuthController::class, 'readBahasaOsing']);
Route::get('/bahasaosing/{id}', [AuthController::class, 'readbyIdBahasaOsing']);
Route::put('/bahasaosingUpdate/{id}', [AuthController::class, 'updateBahasaOsing']);
Route::delete('/bahasaosingDelete/{id}', [AuthController::class, 'deletebyIdBahasaOsing']);

//BAHASA INDONESIA
Route::post('addbahasaindonesia', [AuthController::class, 'createBahasaIndonesia']);
Route::get('bahasaindonesia', [AuthController::class, 'readBahasaIndonesia']);
Route::get('/bahasaindonesia/{id}', [AuthController::class, 'readbyIdBahasaIndonesia']);
Route::put('/bahasaindonesiaUpdate/{id}', [AuthController::class, 'updateBahasaIndonesia']);
Route::delete('/bahasaindonesiaDelete/{id}', [AuthController::class, 'deletebyIdBahasaIndonesia']);

//WISATA
Route::post('addwisata', [AuthController::class, 'createWisata']);
Route::get('wisata', [AuthController::class, 'readWisata']);
Route::get('/wisata/{id}', [AuthController::class, 'readbyIdWisata']);
Route::put('/wisataUpdate/{id}', [AuthController::class, 'updateWisata']);
Route::delete('/wisataDelete/{id}', [AuthController::class, 'deletebyIdWisata']);
