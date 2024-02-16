<?php

use App\Http\Controllers\UsersController;
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

//register api
Route::get('/register' , [UsersController::class, 'register']);
Route::post('/register' , [UsersController::class, 'registerUser']);


//login api

Route::get('/login' , [UsersController::class, 'login']);
Route::post('/login' , [UsersController::class, 'loginUser']);
