<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profesional extends Model
{
    protected $table='profesionals';
    protected $fillable=['nombres','apellidos','rut','ciudad','direccion','correo','telefono'];
}
