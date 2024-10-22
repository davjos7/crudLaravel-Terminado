<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relacion extends Model
{
    use HasFactory;
    protected $table = 'relacion_curso';
    protected $primaryKey = 'id_relacion';
    protected $fillable = [
        'id_alumno',
        'id_curso'
    ];
}
