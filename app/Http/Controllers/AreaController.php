<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;

class AreaController extends Controller
{
    public function consultaProfe(){
        $area = Area::find(2);
        return $area->teachers;
    }

    public function consultasCurso(){
        $area = Area::find(1);
        return $area->courses;
    }

//
    public function create (){
    return view('area.create');
    }

    public function store(Request $request){
        $area = Area::create($request->all());
    return $area;
    }


}
