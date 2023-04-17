<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ResultadosController;

// Ruta para obtener todas las respuestas 
Route::get('/respuestas', [ResultadosController::class, 'obtenerTodasLasRespuestas']);

// Rutas para obtener resultados de cantidad de respuestas totales
Route::get('/respuestas/total', [ResultadosController::class, 'obtenerCantidadRespuestasTotales']);

// Rutas para obtener resultados de cantidad de respuestas por día
Route::get('/respuestas/dia', [ResultadosController::class, 'obtenerCantidadRespuestasPorDia']);

// Rutas para obtener frecuencia de edades
Route::get('/frecuencia/edades', [ResultadosController::class, 'obtenerFrecuenciaEdades']);

// Rutas para obtener frecuencia de colores
Route::get('/frecuencia/colores', [ResultadosController::class, 'obtenerFrecuenciaColores']);

// Rutas para obtener frecuencia de color por edad
Route::get('/frecuencia/color-por-edad', [ResultadosController::class, 'obtenerFrecuenciaColorPorEdad']);

//Agregar Resultado
Route::post('/resultados', [ResultadosController::class, 'agregarResultado']);
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

