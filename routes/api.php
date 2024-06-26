<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post("/auth/register", [\App\Http\Controllers\Api\AuthController::class, 'create']);
Route::post("/auth/login", [\App\Http\Controllers\Api\AuthController::class, 'login']);

Route::middleware(['auth:sanctum'])->group(function () {
    Route::apiResource('/products', \App\Http\Controllers\Api\ProductoController::class);
    Route::get('/categorias', [\App\Http\Controllers\Api\ProductoController::class, 'categorias']);
    Route::get('/marcas', [\App\Http\Controllers\Api\ProductoController::class, 'marcas']);
    Route::post('/perfil/editar', [\App\Http\Controllers\Api\PerfilController::class, 'editar']);
});
