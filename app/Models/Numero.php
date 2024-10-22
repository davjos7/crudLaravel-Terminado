<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Numero extends Model
{
    use HasFactory;
    protected $table = 'numeros';
    protected $primaryKey = 'id_numero';
    protected $fillable = [
        'numero_camiseta'
    ];
}
