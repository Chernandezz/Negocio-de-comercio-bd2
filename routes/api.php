<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

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

Route::get('/clientes', [ClienteController::class, 'index']);
Route::prefix('/cliente')->group(function(){
    Route::post('/nuevo', [ClienteController::class, 'nuevo']);
    Route::put('/{cedula}', [ClienteController::class, 'actualizar']);
    Route::delete('/{cedula}', [ClienteController::class, 'eliminar']);
});