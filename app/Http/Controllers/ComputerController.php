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

    public function store(Request $request){

    $computer = Computer::create($request->all());
    return $computer;
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
