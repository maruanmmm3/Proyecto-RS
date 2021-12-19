<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    use HasFactory;
    protected $fillable = ['institucion', 'cant_ben','cant_vol','cant_rega','cant_hor','cant_horeje','area','fech_inicio','fech_fin','navidad_id'];


//Relacion uno a muchos inversa
    public function navidades(){
        return $this->belongsTo(Navidad::class);
    }
}
