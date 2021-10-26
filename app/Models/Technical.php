<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technical extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'apellido'];

    //Relacion uno a muchos 

   /*  public function promociones(){
        return $this->hasMany(Promocion::class);
    } */
}
