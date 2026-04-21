<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aprendice;

class AprendiceController extends Controller
{
    public function consultaCurso(){
        $aprendiz = Aprendice::find(1);
        return $aprendiz->course;
    }
}
