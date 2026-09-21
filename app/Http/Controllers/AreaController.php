<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;

class AreaController extends Controller
{
    /* public function consultaProfe(){
        $area = Area::find(2);
        return $area->teachers;
    }

    public function consultasCurso(){
        $area = Area::find(1);
        return $area->courses;
    } */

    // MOSTRAR TODOS LOS DATOS
    public function index(){
        $areas = Area::all();
        return response()->json($areas, 200);
    }

    // GUARDAR DATOS
    public function store(Request $request) {

        $validated = $request->validate([
            'name' => 'required|string|max:100',
        ]);

        $area = Area::create($validated);

        return response()->json($area, 201);
    }
    // MOSTRAR UN REGISTRO
    public function show($id) {

        $area = Area::findOrFail($id);

        return response()->json($area, 200);
    }
    // ACTUALIZAR UN REGISTRO
    public function update(Request $request, $id) {

    $area = Area::findOrFail($id);

    $validated = $request->validate([
        'name' => 'required|string|max:100',
    ]);

    $area->update($validated);
    
    return response()->json($area, 200);
    }

    // ELIMINAR UN REGISTRO
    public function destroy($id) {

        $area = Area::findOrFail($id);

        $area->delete();

        return response()->json(['message' => 'Eliminado correctamente'], 200);
    }
}



