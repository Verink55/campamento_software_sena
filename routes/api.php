<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BootcampController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ReviewController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

//clase route: se encarga de rutas
//metodo apiResource: crea rutas de cambio de estado para una entidad

Route::apiResource('bootcamps',BootcampController::class);
Route::apiResource('courses',CourseController::class);
Route::apiResource('review',ReviewController::class);