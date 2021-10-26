<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donacion extends Model
{
    use HasFactory;
    //Relacion muchos a muchos

    public function actividad_campaña_donaciones(){
        return $this->belongsToMany(Actividad_campaña::class);
    }

    public function productos(){
        return $this->belongsToMany(Producto::class);
    }
}
