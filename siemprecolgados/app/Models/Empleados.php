<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{

    protected $fillable = [
        'id',
        'nombre',
        'correo',
        'dni',
        'telefono'
    ];
    use HasFactory;
}
