<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actividaddos extends Model
{
    use HasFactory;
    protected $fillable = ['nombre','apellido','puesto','sexo','hora','proyecto_id'];


    public function proyectos(){
        return $this->belongsTo(Proyecto::class);
    }
}
