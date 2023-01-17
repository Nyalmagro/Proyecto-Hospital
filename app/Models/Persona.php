<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    protected $fillable=['nombres','apellidos','identificacion','e_mail','direcccion','telefono','fecha_nacimiento','genero'];
}
