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
        $aprendices = Aprendice::with([ 'course', 'computer' ])->get();
        return view('aprendice.index', compact('aprendices'));
    }

    public function create() {
        $courses = Course::all();

        $computers = Computer::whereDoesntHave('aprendice')->get();

        return view('aprendice.create', compact('courses', 'computers'));
    }

    public function store(Request $request) {
        $aprendiz = Aprendice::create($request->all());
        return $aprendiz;
    }

    public function show($id){
        $aprendiz = Aprendice::with([ 'course', 'computer' ])->findOrFail($id);
        return view('aprendice.show', compact('aprendiz'));
    }

    public function edit(Aprendice $aprendice){
        $cursos = Course::all();
        $compus = Computer::all();
        return view('aprendice.edit', compact('aprendice', 'cursos', 'compus'));
    }

    public function update(Request $request, Aprendice $aprendice){
        $aprendice->update($request->all());

        return redirect()->route('aprendice.list')->with('success', 'Aprendiz actualizado correctamente');
    }

    public function destroy(Aprendice $aprendice){
        $aprendice->delete();
        return redirect()->route('aprendice.list')->with('success', 'Aaprendiz eliminado con exito');
    }
}
