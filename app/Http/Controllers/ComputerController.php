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
        $computadores = Computer::all();
        return view('computer.index', compact('computadores'));
    }

    public function create (){
    return view('computer.create');
    }

    public function store(Request $request)
{
    
    $computer = Computer::create($request->all());

    // 2. Procesar la imagen solo si se adjuntó un archivo
    if ($request->hasFile('urlFoto')) {
        $file = $request->file('urlFoto');
        $nombreArchivo = "foto_" . time() . "." . $file->guessExtension();

        // Guardar archivo en storage/app/public/images
        $file->storeAs('public/images', $nombreArchivo);

        // Actualizar el atributo y guardar en BD
        $computer->urlFoto = $nombreArchivo;
        $computer->save();
    }

    return redirect()->route('computer.list')->with('success', 'Computador almacenado correctamente');
}

    public function show($id){
        $computer = Computer::find($id);
        return view('computer.show', compact('computer'));
    }

    public function edit($id){
        $compu = Computer::findOrFail($id);
        return view('computer.edit', compact('compu'));
    }

    public function update(Request $request, $id){
        $compu = Computer::findOrFail($id);
        $compu->update($request->all());

        return redirect()->route('computer.list')->with('success', 'Computador actualizado correctamente');
    }

    public function destroy(Computer $computer){
        $computer->delete();
        return redirect()->route('computer.list')->with('success', 'Computador eliminado con exito');
    }

}
