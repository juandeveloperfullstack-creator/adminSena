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

    public function index(){
        $centros = Training_center::all();
        return view('training_center.index', compact('centros'));
    }

    public function create (){
    return view('training_center.create');
    }

    public function store(Request $request){
        $training = Training_center::create($request->all());
    return $training;
    }

    public function show($id){
        $centro = Training_center::find($id);
        return view('training_center.show', compact('centro'));
    }

    public function edit($id){
        $center = Training_center::findOrFail($id);
        return view('training_center.edit', compact('center'));
    }

    public function update(Request $request, $id){
        $center = Training_center::findOrFail($id);
        $center->update($request->all());

        return redirect()->route('training_center.list')->with('success', 'Centro de formacion actualizado correctamente');
    }

    public function destroy(Training_center $training_center){
        $training_center->delete();
        return redirect()->route('training_center.list')->with('success', 'centro de formacion eliminado con exito');
    }
}
