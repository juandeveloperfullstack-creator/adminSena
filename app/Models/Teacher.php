<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    // Un profesor tiene un area
    public function area(){
        return $this->belongsTo(Area::class);
    }

    // Un profesor pertenece a un centro de formacion
    public function training_center(){
        return $this->belongsTo(Training_center::class);
    }

    // Un profesor tiene muchos cursos relacion n:m
    public function courses(){
        return $this->belongsToMany(Course::class);
    }
}
