
<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ConciertosController;
use App\Http\Controllers\API\ArtistasController;
use App\Http\Controllers\API\EntradasController;
use App\Http\Controllers\API\ClientesController;
use App\Http\Controllers\API\LocacionesController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('conciertos', ConciertosController::class);
Route::apiResource('artistas', ArtistasController::class);
Route::apiResource('entradas', EntradasController::class);
Route::apiResource('clientes', ClientesController::class);
Route::apiResource('locaciones', LocacionesController::class);
