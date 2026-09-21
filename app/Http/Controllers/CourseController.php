<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Area;
use App\Models\Training_center;

class CourseController extends Controller
{
    /* public function consultaArea(){
        $curso = Course::find(2);
        return $curso->area;
    }

    public function consultaCentro(){
        $curso = Course::find(1);
        return $curso->training_center;
    }

    public function consultaAprendiz(){
        $curso = Course::find(1);
        return $curso->aprendices;
    }

    public function consultaProfe(){
        $curso = Course::find(1);
        return $curso->teachers;
    } */

        // MOSTRAR TODOS LOS DATOS
    public function index(){
        $cursos = Course::all();
        return response()->json($cursos, 200);
    }

    // GUARDAR DATOS
    public function store(Request $request) {

        $validated = $request->validate([
        'course_number'      => 'required|string|max:255',
        'day'                => 'required|string|max:50',
        'area_id'            => 'nullable|integer|exists:areas,id',
        'training_center_id' => 'nullable|integer|exists:training_centers,id',
    ]);

        $curso = Course::create($validated);

        return response()->json($curso, 201);
    }
    // MOSTRAR UN REGISTRO
    public function show($id) {

        $curso = Course::findOrFail($id);

        return response()->json($curso, 200);
    }
    // ACTUALIZAR UN REGISTRO
    public function update(Request $request, $id) {

    $curso = Course::findOrFail($id);

    $validated = $request->validate([
        'course_number'      => 'required|string|max:255',
        'day'                => 'required|string|max:50',
        'area_id'            => 'nullable|integer|exists:areas,id',
        'training_center_id' => 'nullable|integer|exists:training_centers,id',
    ]);

    $curso->update($validated);
    
    return response()->json($curso, 200);
    }

    // ELIMINAR UN REGISTRO
    public function destroy($id) {

        $curso = Course::findOrFail($id);

        $curso->delete();

        return response()->json(['message' => 'Eliminado correctamente'], 200);
    }
}
