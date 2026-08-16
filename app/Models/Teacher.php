<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Teacher extends Model
{
    use HasFactory;

    // Un profesor tiene un area
    public function area(){
        return $this->belongsTo(Area::class, 'area_id');
    }

    // Un profesor pertenece a un centro de formacion
    public function trainingCenter(){
        return $this->belongsTo(Training_center::class, 'training_center_id');
    }

    // Un profesor tiene muchos cursos relacion n:m
    public function courses(){
        return $this->belongsToMany(Course::class);
    }

    protected $fillable = ['name', 'email', 'area_id', 'training_center_id'];
}
