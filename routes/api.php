<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\api\ConciertoController;
use App\Http\Controllers\api\ArtistasController;
use App\Http\Controllers\api\EntradasController;
use App\Http\Controllers\api\ClientesController;
use App\Http\Controllers\api\LocacionesController;






Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Aquí tienes las rutas para Conciertos
Route::apiResource('conciertos', ConciertoController::class);

// Puedes añadir las demás rutas de la misma forma
Route::apiResource('artistas', ArtistasController::class);
Route::apiResource('entradas', EntradasController::class);
Route::apiResource('clientes', ClientesController::class);
Route::apiResource('locaciones', LocacionesController::class);




