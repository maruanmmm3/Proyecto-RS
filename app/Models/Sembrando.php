<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sembrando extends Model
{
    use HasFactory;
    protected $fillable = ['nombre','descripcion','fecha'];

    //Relacion uno a muchos
    public function beneficiados(){
        return $this->hasMany(Beneficiado::class);
    }
}
