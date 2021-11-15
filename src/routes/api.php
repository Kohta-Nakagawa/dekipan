<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\BreadController;

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

// Route::middleware('auth:api')->get('/api/breads', [BreadController::class, 'index']);
	
// Route::apiResource('/breads', [BreadController::class, 'index']);

Route::get('/breads', [BreadController::class, 'index']);
Route::get('/top', [BreadController::class, 'testData']);
Route::get('/fresh', [BreadController::class, 'getFreshBreads']);
// Route::post('/top', [AriaController::class, 'index']);
