<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Area;

class TeacherController extends Controller
{// muestra que area da un profesor
    public function consultarArea(){
        $profe = Teacher::find(1);
        return $profes->area;
    }
    // muestra en que centro se encuentra el profesor
    public function consultarCentro(){
        $profe = Teacher::find(1);
        return $profe->training_center;
    }
    public function consultarCurso(){
        $profe = Teacher::find(1);
        return $profe->courses;
    }
}




