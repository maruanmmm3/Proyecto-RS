<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Navidad extends Model
{
    use HasFactory;

    protected $fillable = ['nombre','descripcion','fecha'];

    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }

    //Relacion uno a muchos
    public function actividades(){
        return $this->hasMany(Actividad::class);
    }
}
