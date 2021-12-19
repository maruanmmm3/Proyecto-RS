<?php

namespace App\Imports;

use App\Models\Actividaddos;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ActividaddosImport implements ToModel, WithHeadingRow
{
    
    public function model(array $row)
    {
        return new Actividaddos([
            'nombre' => $row['nombre'],
            'apellido' => $row['apellido'],
            'puesto' => $row['puesto'],
            'sexo' => $row['sexo'],
            'hora' => $row['horas_trabajadas'],
            'proyecto_id' => $row['codigo_de_identificacion'],
        ]);
    }
}
