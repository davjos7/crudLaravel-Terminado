<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;
    protected $table = 'alumnos';
    protected $primaryKey = 'id_alumno';
    protected $fillable = [
        'nombre_alumno',
        'apellido_alumno',
        'edad_alumno',
        'cumpleanos_alumno',
        'cursos',
        'fecha_alumno',
    ];
}
