<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participante extends Model
{
    use HasFactory;

    protected $fillable = ['nombre','colegio','sexo','edad','voluntariado_id'];



    //Relacion uno a muchos inversa

    public function voluntariados(){
        return $this->belongsTo(Voluntario::class);
    }
}
