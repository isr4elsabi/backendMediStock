<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Ruta de prueba para verificar la conexión
Route::get('/ping', function () {
    return response()->json([
        'mensaje' => '¡Conexión exitosa! Hola desde Laravel.'
    ]);
});