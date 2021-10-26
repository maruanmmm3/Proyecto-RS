<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;

    protected $fillable = ['nombre','apellido','id_senati','edad','sexo','nota','carrera_id'];

    //Relacion uno a muchos inversa
    public function carreras(){
        return $this->belongsTo(Carrera::class);
    }
}
