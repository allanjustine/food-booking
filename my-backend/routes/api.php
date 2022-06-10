<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodBookingController;
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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//   return $request->user();
//});

Route::get('/foods', [FoodBookingController::class, 'index']);
Route::get('/foods/{food}', [FoodBookingController::class, 'show']);


Route::post('/foods',[FoodBookingController::class, 'store']);
Route::put('/foods/{food}', [FoodBookingController::class, 'update']);

Route::delete('/foods/{food}',[FoodBookingController::class, 'destroy']);
