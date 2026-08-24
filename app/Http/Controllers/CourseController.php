<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Area;
use App\Models\Training_center;

class CourseController extends Controller
{
    /* public function consultaArea(){
        $curso = Course::find(2);
        return $curso->area;
    }

    public function consultaCentro(){
        $curso = Course::find(1);
        return $curso->training_center;
    }

    public function consultaAprendiz(){
        $curso = Course::find(1);
        return $curso->aprendices;
    }

    public function consultaProfe(){
        $curso = Course::find(1);
        return $curso->teachers;
    } */


    public function index(){
        $cursos = Course::with(['area', 'trainingCenter'])->get();
        return view('course.index', compact('cursos'));
    }

    public function create() {
        $areas = Area::all();
        $centers = Training_center::all();

        return view('course.create', compact('areas', 'centers'));
    }

    public function store(Request $request) {
        $course = Course::create($request->all());
        return redirect()->route('course.list')->with('success', 'Curso almacenado correctamente');
    }

    public function show($id){
        $curso = Course::with([ 'area', 'trainingCenter'])->findOrFail($id);
        return view('course.show', compact('curso'));
    }

    public function edit(Course $course){
        $areas = Area::all();
        $centros = Training_center::all();
        return view('course.edit', compact('course', 'areas', 'centros'));
    }

    public function update(Request $request, Course $course){
        $course->update($request->all());

        return redirect()->route('course.list')->with('success', 'Curso actualizado correctamente');
    }

    public function destroy(Course $course){
        $course->delete();
        return redirect()->route('course.list')->with('success', 'Curso eliminado con exito');
    }

}
