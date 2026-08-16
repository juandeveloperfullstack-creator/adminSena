<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    // Un curso pertenece a una area
    public function area(){
        return $this->belongsTo(Area::class, 'area_id');
    }

    // Un curso pertenece a un centro de formacion
    public function trainingCenter(){
        return $this->belongsTo(Training_center::class, 'training_center_id');
    }

    // Un curso tiene muchos aprendices
    public function aprendices(){
        return $this->hasMany(Aprendice::class);
    }

    // Un curso tiene muchos profesores n:m
    public function teachers(){
        return $this->belongsToMany(Teacher::class);
    }

    protected $fillable = ['course_number', 'day', 'area_id', 'training_center_id'];
}
