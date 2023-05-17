<?php

use App\Http\Controllers;
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

Route::get('/users');
Route::get('/users/{id}', [Controllers\Users\GetUserController::class, 'execute']);
Route::post('/users', [Controllers\Users\CreateUserController::class, 'execute']);
Route::put('/users', [Controllers\Users\UpdateUserController::class, 'execute']);

Route::get('/cars', [Controllers\Cars\GetCarsController::class, 'execute']);
Route::post('/cars', [Controllers\Cars\CreateCarController::class, 'execute']);
Route::put('/cars', [Controllers\Cars\UpdateCarController::class, 'execute']);


