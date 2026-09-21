<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aprendice;
use App\Models\Course;
use App\Models\Computer;

class AprendiceController extends Controller
{
    /* public function consultaCurso(){
        $aprendiz = Aprendice::find(1);
        return $aprendiz->course;
    }

    public function consultaComputador(){
        $aprendice = Aprendice::find(3);
        return $aprendice->computer;
    } */

        public function index(){
        $aprendices = Aprendice::all();
        return response()->json($aprendices, 200);
    }

    // GUARDAR DATOS
    public function store(Request $request) {

        $validated = $request->validate([
        'name'        => 'required|string|max:100',
        'email'       => 'required|email|max:100|unique:aprendices,email',
        'cell_number' => 'required|string|max:15',
        'course_id'   => 'nullable|integer|exists:courses,id',
        'computer_id' => 'nullable|integer|exists:computers,id|unique:aprendices,computer_id',
    ]);

        $aprendice = Aprendice::create($validated);

        return response()->json($aprendice, 201);
    }
    // MOSTRAR UN REGISTRO
    public function show($id) {

        $aprendice = Aprendice::findOrFail($id);

        return response()->json($aprendice, 200);
    }
    // ACTUALIZAR UN REGISTRO
    public function update(Request $request, $id) {

    $aprendice = Aprendice::findOrFail($id);

    $validated = $request->validate([
        'name'        => 'required|string|max:100',
        'email'       => 'required|email|max:100|unique:aprendices,email,' . $id,
        'cell_number' => 'required|string|max:15',
        'course_id'   => 'nullable|integer|exists:courses,id',
        'computer_id' => 'nullable|integer|exists:computers,id|unique:aprendices,computer_id,' . $id,
    ]);

    $aprendice->update($validated);
    
    return response()->json($aprendice, 200);
    }

    // ELIMINAR UN REGISTRO
    public function destroy($id) {

        $aprendice = Aprendice::findOrFail($id);

        $aprendice->delete();

        return response()->json(['message' => 'Eliminado correctamente'], 200);
    }
}
