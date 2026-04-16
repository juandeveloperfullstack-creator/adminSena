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
    // Trae al centro con el id (1) y muestra los profesores que hay en el centro 
    public function consulta_2(){
        $centro = Training_center::with('teachers')->find(1);
        return $centro;
    }
}
