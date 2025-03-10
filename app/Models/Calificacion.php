<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calificacion extends Model
{
    protected $fillable = ['student_name', 'course_name', 'grade'];

    protected $table = 'calificaciones';
}
