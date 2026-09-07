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



    /* GET /api/areas */
    public function index()
    {
        $areas = Area::all();
        return response()->json($areas, 200);
    }

    /* POST /api/areas */
    public function store(Request $request)
    {
        $area = Area::create($request->all());
        return response()->json([
            'message' => 'Area almacenada correctamente',
            'data' => $area
        ], 201);
    }

    /* GET /api/areas{id} */
    public function show($id)
    {
        $area = Area::findOrFail($id);
        return response()->json($area, 200);
    }

    /* PUT/PATCH /api/areas/{id} */
    public function update(Request $request, $id)
    {
        $area = Area::findOrFail($id);
        $area->update($request->all());

        return response()->json([
            'message' => 'Area actualizada correctamente',
            'data' => $area
        ], 200);
    }

    /* DELETE /api/areas/{id} */
    public function destroy($id)
    {
        $area = Area::findOrFail($id);
        $area->delete();

        return response()->json([
            'message' => 'Area eliminada'
        ], 200);
    }
}
