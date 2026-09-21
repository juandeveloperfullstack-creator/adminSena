<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Area;
use App\Models\Training_center;

class TeacherController extends Controller
{
    // muestra que area da un profesor
    /* public function consultaArea(){
        $profe = Teacher::find(1);
        return $profe->area;
    }
    // muestra en que centro se encuentra el profesor
    public function consultaCentro(){
        $profe = Teacher::find(1);
        return $profe->training_center;
    }


    public function consultaCurso(){
        $profe = Teacher::find(1);
        return $profe->courses;
    } */

    public function index(){
        $teachers = Teacher::all();
        return response()->json($teachers, 200);
    }

    // GUARDAR DATOS
    public function store(Request $request) {

        $validated = $request->validate([
        'name'               => 'required|string|max:100',
        'email'              => 'required|email|max:100|unique:teachers,email',
        'area_id'            => 'nullable|integer|exists:areas,id',
        'training_center_id' => 'nullable|integer|exists:training_centers,id',
    ]);

        $teacher = Teacher::create($validated);

        return response()->json($teacher, 201);
    }
    // MOSTRAR UN REGISTRO
    public function show($id) {

        $teacher = Teacher::findOrFail($id);

        return response()->json($teacher, 200);
    }
    // ACTUALIZAR UN REGISTRO
    public function update(Request $request, $id) {

    $teacher = Teacher::findOrFail($id);

    $validated = $request->validate([
        'name'               => 'required|string|max:100',
        'email'              => 'required|email|max:100|unique:teachers,email,' . $id,
        'area_id'            => 'nullable|integer|exists:areas,id',
        'training_center_id' => 'nullable|integer|exists:training_centers,id',
    ]);

    $teacher->update($validated);
    
    return response()->json($teacher, 200);
    }

    // ELIMINAR UN REGISTRO
    public function destroy($id) {

        $teacher = Teacher::findOrFail($id);

        $teacher->delete();

        return response()->json(['message' => 'Eliminado correctamente'], 200);
    }
}




