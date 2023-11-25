<?php

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

Route::get('/places', [App\Http\Controllers\PlacesController::class, 'index']);
Route::get('/places/{id}', [App\Http\Controllers\PlacesController::class, 'getById']);
Route::post('/places', [App\Http\Controllers\PlacesController::class, 'store']);
Route::put('/places/{id}/edit', [App\Http\Controllers\PlacesController::class, 'update']);