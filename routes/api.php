<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\CuidadorController;
use App\Http\Controllers\ActividadController;
use App\Http\Controllers\RecintoController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/animales', [AnimalController::class, 'index']);
Route::get('/animales/{animal}', [AnimalController::class, 'show']);
Route::post('/animales', [AnimalController::class, 'store']);
Route::put('/animales/{animal}', [AnimalController::class, 'update']);
Route::delete('/animales/{animal}', [AnimalController::class, 'destroy']);

Route::get('/cuidadores', [CuidadorController::class, 'index']);
Route::get('/cuidadores/{cuidador}', [CuidadorController::class, 'show']);
Route::post('/cuidadores', [CuidadorController::class, 'store']);
Route::put('/cuidadores/{cuidador}', [CuidadorController::class, 'update']);
Route::delete('/cuidadores/{cuidador}', [CuidadorController::class, 'destroy']);

Route::get('/actividades', [ActividadController::class, 'index']);
Route::get('/actividades/{actividad}', [ActividadController::class, 'show']);
Route::post('/actividades', [ActividadController::class, 'store']);
Route::put('/actividades/{actividad}', [ActividadController::class, 'update']);
Route::delete('/actividades/{actividad}', [ActividadController::class, 'destroy']);

Route::get('/recintos', [RecintoController::class, 'index']);
Route::get('/recintos/{recinto}', [RecintoController::class, 'show']);
Route::post('/recintos', [RecintoController::class, 'store']);
Route::put('/recintos/{recinto}', [RecintoController::class, 'update']);
Route::delete('/recintos/{recinto}', [RecintoController::class, 'destroy']);