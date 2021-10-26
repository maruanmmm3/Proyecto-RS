<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    //Relacion muchos a muchos

    public function donaciones(){
        return $this->belongsToMany(Donacion::class);
    }
}
