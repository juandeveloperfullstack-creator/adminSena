<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    // Un area tiene muchos profesores relacion 1:n
    public function Teachers(){
        return $this->hasMany(Teacher::class);
    }

    // Un area tiene muchos cursos relacion 1:n
    public function Courses(){
        return $this->hasMany(Course::class);
    }
}
