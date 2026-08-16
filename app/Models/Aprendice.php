<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aprendice extends Model
{
    use HasFactory;

    // Un aprendiz pertenece a un curso
    public function course(){
        return $this->belongsTo(Course::class, 'course_id');
    }

    // Un aprendiz usa un computador
    public function computer(){
        return $this->belongsTo(Computer::class, 'computer_id');
    }

    protected $fillable = ['name', 'email', 'cell_number', 'course_id', 'computer_id'];
}
