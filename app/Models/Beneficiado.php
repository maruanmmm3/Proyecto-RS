<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beneficiado extends Model
{
    use HasFactory;
    protected $fillable = ['year','arbol','hombre','mujer','area','sembrando_id'];
    
//Relacion uno a mcuhos inversa
    public function sembrandos(){
        return $this->belongsTo(Sembrando::class);
    }
}
