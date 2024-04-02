<?php

use App\Http\Controllers\API\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ProductsController;

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



Route::controller(AuthController::class)->group(function()
{
    Route::post('login','login');
    Route::post('register','register');
});



//api functions
Route::get('/products', [ProductsController::class, 'index']);
Route::delete('/products/{id}', [ProductsController::class, 'delete']);
Route::post('/products', [ProductsController::class, 'store']);
