<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RatingsController;

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
// Route::get("/ratings",[RatingsController::class, "index"]);
// Route::get("/ratings/{id}",[RatingsController::class, "show"]);
Route::apiResource('ratings',RatingsController::class);
Route::get('users',[UserController::class, 'index']);
Route::post('users',[UserController::class, 'store']);