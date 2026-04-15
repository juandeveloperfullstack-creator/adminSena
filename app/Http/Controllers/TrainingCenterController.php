<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Training_center;
use App\Models\Teacher;

class TrainingCenterController extends Controller
{
    // consulta de que profesores hay en cada centro
    public function consulta(){
        $centro = Training_center::find(1);
        return $centro->teachers;
    }
    // consulta, en que centro de formacion se da un curso
    public function consulta_1(){
        $centro = Training_center::find(1);
        return $centro->courses;
    }
}
