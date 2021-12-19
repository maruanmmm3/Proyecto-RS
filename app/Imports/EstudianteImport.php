<?php

namespace App\Imports;


use App\Models\Estudiante;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class EstudianteImport implements ToModel, WithHeadingRow
{
   
    public function model(array $row)
    {
        return new Estudiante([
            'nombre'=> $row['nombre'],
            'apellido' => $row['apellido'],
            'id_senati' => $row['id_senati'],
            'edad' => $row['edad'],
            'sexo' => $row['sexo'],
            'nota' => $row['nota'],
            'carrera_id' => $row['codigo_de_grupo'],
        ]);
    }
}
