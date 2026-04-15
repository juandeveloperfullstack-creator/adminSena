<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training_center extends Model
{
    use HasFactory;

    // Un centro de formacion tiene muchos profesores relacion 1:n
    public function teachers(){
        return $this->hasMany(Teacher::class);
    }

    // Un centro de formacion tiene muchos cursos relacion 1:n
    public function courses(){
        return $this->hasMany(Course::class);
    }
}
