<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;


class Proyecto extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'proposito','icono'];
    //Relacion muchos a muchos

    public function actividaddos(){
        return $this->hasMany(Actividaddos::class);
    }

    public function actividad_ponentes(){
        return $this->belongsToMany(Actividad_ponente::class);
    }

    public function actividad_campañas(){
        return $this->belongsToMany(Actividad_campaña::class);
    }


    //Polimorfico

    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }
}
