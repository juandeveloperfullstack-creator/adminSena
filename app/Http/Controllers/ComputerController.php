<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;

class ComputerController extends Controller
{
    public function consultaAprendiz(){
        $compu = Computer::find(3);
        return $compu->aprendices;
    }
}
