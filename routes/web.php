<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrainingCenterController;
use App\Http\Controllers\TeacherController;
<<<<<<< HEAD
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\AprendiceController;
=======
>>>>>>> ef5b2516b00cdb2b4e31245e2167858047d16b8a
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

<<<<<<< HEAD
Route::get('/consultaCentro', [TrainingCenterController::class, 'consultaCursos']);
=======
Route::get('/consultasCentro', [TrainingCenterController::class, 'consultaSimple']);
Route::get('/consultasProfesores', [TeacherController::class, 'consultarCurso']);
>>>>>>> ef5b2516b00cdb2b4e31245e2167858047d16b8a

Route::get('/consultaTeacher', [TeacherController::class, 'consultaCurso']);

Route::get('/consultasCursos', [CourseController::class, 'consultaProfe']);

Route::get('/consultasComputador', [ComputerController::class, 'consultaAprendiz']);

Route::get('/consultasAreas', [AreaController::class, 'consultasCurso']);

Route::get('/consultasAprendiz', [AprendiceController::class, 'consultaCurso']);