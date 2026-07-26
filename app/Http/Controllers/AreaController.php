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

//

    public function index () {
        $areas = Area::all();
        return view('area.index', compact('areas'));
    }

    public function show($id){
        $area = Area::find($id);
        return view('area.show', compact('area'));
    }

    public function create (){
    return view('area.create');
    }

    public function edit($id){
        $area = Area::findOrFail($id);
        return view('area.edit', compact('area'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required|max:255',
        ]);

        $area = Area::findOrFail($id);
        $area->update($request->all());

        return redirect()->route('area.list')->with('success', 'Area actualizada correctamente');
    }

    public function store(Request $request){
        $area = Area::create($request->all());
    return $area;
    }

    
}
