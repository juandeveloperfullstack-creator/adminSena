<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;

class ComputerController extends Controller
{
    /* public function consultaAprendiz(){
        $compu = Computer::find(3);
        return $compu->aprendices;
    } */

        public function index(){

        $computer = Computer::all();

        return response()->json($computer, 200);
    }

    // GUARDAR DATOS
    public function store(Request $request) 
{
    $validated = $request->validate([
        'number' => 'required|numeric',
        'brand' => 'required|string|max:225',
        'urlFoto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $data = $validated;

    
    if ($request->hasFile('urlFoto')) {
        $uploadedFileUrl = $request->file('urlFoto')->storeOnCloudinary('computadores')->getSecureUrl();
        $data['urlFoto'] = $uploadedFileUrl;
    }

    $computer = Computer::create($data);

    return response()->json($computer, 201);
}
    // MOSTRAR UN REGISTRO
    public function show($id) {

        $computer = Computer::findOrFail($id);

        return response()->json($computer, 200);
    }
    // ACTUALIZAR UN REGISTRO
    public function update(Request $request, $id) 
{
    $computer = Computer::findOrFail($id);

    $validated = $request->validate([
        'number' => 'required|numeric',
        'brand' => 'required|string|max:225',
        'urlFoto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $data = $validated;

    if ($request->hasFile('urlFoto')) {
        $uploadedFileUrl = $request->file('urlFoto')->storeOnCloudinary('computadores')->getSecureUrl();
        $data['urlFoto'] = $uploadedFileUrl;
    }

    $computer->update($data);

    return response()->json($computer, 200);
}

    // ELIMINAR UN REGISTRO
    public function destroy($id) {

        $computer = Computer::findOrFail($id);

        $computer->delete();

        return response()->json(['message' => 'Eliminado correctamente'], 200);
    }
}

