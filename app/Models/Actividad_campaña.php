<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actividad_campaña extends Model
{
    use HasFactory;

     //Relacion muchos a muchos
     public function proyectos(){
        return $this->belongsToMany(Proyecto::class);
    }

    public function voluntarios(){
        return $this->belongsToMany(Voluntario::class);
    }

    public function donaciones(){
        return $this->belongsToMany(Donacion::class);
    }
}
