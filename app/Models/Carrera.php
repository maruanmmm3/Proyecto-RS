<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    use HasFactory;
    protected $fillable = ['nombre','promocion_id'];

    //Relacion uno a muchos inversa
    public function promocions(){
        return $this->belongsTo(Promocion::class);
    }

    //Relacion uno a muchos

    public function estudiantes(){
        return $this->hasMany(Estudiante::class);
    }

}
