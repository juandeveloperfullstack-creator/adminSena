<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    // Un curso pertenece a una area
    public function area(){
        return $this->belongsTo(Area::class);
    }

    // Un curso pertenece a un centro de formacion 
    public function training_center(){
        return $this->belongsTo(Training_center::class);
    }

    // Un curso tiene muchos aprendices
    public function aprendices(){
        return $this->hasMany(Aprendice::class);
    }

    // Un curso tiene muchos profesores n:m
    public function teachers(){
        return $this->belongsToMany(Teacher::class);
    }
}
