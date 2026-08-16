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
        $profes = Teacher::with(['area', 'trainingCenter'])->get();
        return view('teacher.index', compact('profes'));
    }

    public function create() {
        $areas = Area::all();
        $centers = Training_center::all();

        return view('teacher.create', compact('areas', 'centers'));
    }

    public function store(Request $request) {
        $teacher = Teacher::create($request->all());
        return $teacher;
    }

    public function show($id){
        $profesor = Teacher::with(['area', 'trainingCenter'])->findOrFail($id);
        return view('teacher.show', compact('profesor'));
    }

    public function edit(Teacher $teacher){
        $areas = Area::all();
        $centros = Training_center::all();
        return view('teacher.edit', compact('teacher', 'areas', 'centros'));
    }

    public function update(Request $request, Teacher $teacher){
        $teacher->update($request->all());

        return redirect()->route('teacher.list')->with('success', 'Profesor actualizado correctamente');
    }

    public function destroy(Teacher $teacher){
        $teacher->delete();
        return redirect()->route('teacher.list')->with('success', 'Profesor eliminado con exito');
    }
}




