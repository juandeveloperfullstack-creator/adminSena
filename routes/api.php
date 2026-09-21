<?php

use App\Http\Controllers\AprendiceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\TrainingCenterController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TeacherController;

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
// RUTA AREAS
Route::apiResource('areas', AreaController::class);
// RUTA CENTERS
Route::apiResource('centers', TrainingCenterController::class);
// RUTA COMPUTERS
Route::apiResource('computers', ComputerController::class);
// RUTA TEACHERS
Route::apiResource('teachers', TeacherController::class);
// RUTA COURSES
Route::apiResource('courses', CourseController::class);
// RUTA APRENDICES
Route::apiResource('aprendices', AprendiceController::class);