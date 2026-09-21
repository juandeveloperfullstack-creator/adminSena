<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Training_center;

class TrainingCenterController extends Controller
{
    // consulta de que profesores hay en cada centro
    /* public function consultaProfesores(){
        $centro = Training_center::find(4);
        return $centro->teachers;
    }
    // consulta, en que centro de formacion se da un curso
    public function consultaCursos(){
        $centro = Training_center::find(1);
        return $centro->courses;
    } */

    // MOSTRAR TODOS LOs DATOS
    public function index(){

        $centros = Training_center::all();

        return response()->json($centros, 200);
    }

    // GUARDAR DATOS
    public function store(Request $request) {

        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'location' => 'required|string|max:225',
        ]);

        $centros = Training_center::create($validated);

        return response()->json($centros, 201);
    }
    // MOSTRAR UN REGISTRO
    public function show($id) {

        $centro = Training_center::findOrFail($id);

        return response()->json($centro, 200);
    }
    // ACTUALIZAR UN REGISTRO
    public function update(Request $request, $id) {

    $centro = Training_center::findOrFail($id);

    $validated = $request->validate([
        'name' => 'required|string|max:100',
        'location' => 'required|string|max:225',
    ]);

    $centro->update($validated);
    
    return response()->json($centro, 200);
    }

    // ELIMINAR UN REGISTRO
    public function destroy($id) {

        $centro = Training_center::findOrFail($id);

        $centro->delete();

        return response()->json(['message' => 'Eliminado correctamente'], 200);
    }
}
