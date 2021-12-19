<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voluntario extends Model
{
    use HasFactory;

    protected $fillable = ['nombre','descripcion','encargado','presupuestoesti','ejecucionreal','lugar','fecha','hora'];

    //Relacion muchos a muchos
    //Este se la agremos mas en la palabra de la funcion 
    //para evitar conflictos con las relaciones con proyectos

    public function actividad_ponente_voluntarios(){
        return $this->belongsToMany(Actividad_ponente::class);
    }

    public function actividad_campaña_voluntarios(){
        return $this->belongsToMany(Actividad_campaña::class);
    }

    //Relacion uno a muchos

    public function participantes(){
        return $this->hasMany(Participante::class);
    }

    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }
}
