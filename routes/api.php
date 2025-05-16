<?php

use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientsContrtroller;
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

Route::post('/login', [AuthController::class, 'login']);

Route::middleware(['auth:sanctum'])->group( function () {
    Route::get('/listClients', [ClientsContrtroller::class, 'listClients']);
    Route::get('/listOrders', [AuthController::class, 'listOrders']);
    Route::get('/logout', [AuthController::class, 'logout']);
    //Route::post('/registerService', [AuthController::class, 'registerService']);
});
