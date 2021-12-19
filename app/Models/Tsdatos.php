<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tsdatos extends Model
{
    use HasFactory;

    protected $fillable = ['nombre_egresados', 'egresados_egresados', 'ingresados_egresados','nombre_retirados','retirados_retirados','ingresados_retirados','nombre_mujer','cantidad_mujer','nombre_mujerformada','cantidad_mujerformada'];

}
