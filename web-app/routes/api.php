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

Route::get('/cars', [Controllers\Cars\GetCarsController::class, 'execute']);
Route::post('/cars', [Controllers\Cars\CreateCarController::class, 'execute']);
Route::put('/cars', [Controllers\Cars\UpdateCarController::class, 'execute']);

Route::get('/customers', [Controllers\Customers\GetCustomersController::class, 'execute']);
Route::get('/customers/{id}', [Controllers\Customers\GetCustomerByIdController::class, 'execute']);
Route::post('/customers', [Controllers\Customers\CreateCustomerController::class, 'execute']);
Route::put('/customers', [Controllers\Customers\UpdateCustomerController::class, 'execute']);
