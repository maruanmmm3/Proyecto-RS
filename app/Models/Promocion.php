<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promocion extends Model
{
    use HasFactory;

    protected $fillable = ['nombre','descripcion'];

//Relacion uno a muhcos inversa
   /*  public function technicals(){
        return $this->belongsTo(Technical::class);
    } */


    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }
    //Relacion uno a muchos
    public function carreras(){
        return $this->hasMany(Carrera::class);
    }
}
