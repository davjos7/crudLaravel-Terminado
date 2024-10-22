<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jugadore extends Model
{
    use HasFactory;
    protected $table = 'jugadores';
    protected $primaryKey = 'id_jugador';
    protected $fillable = [
        'nombre_jugador',
        'pais_jugador',
        'edad_jugador',
        'numero',
    ];
}
