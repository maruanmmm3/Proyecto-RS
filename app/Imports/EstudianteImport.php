<?php

namespace App\Imports;


use App\Models\Estudiante;
use Maatwebsite\Excel\Concerns\ToModel;

class EstudianteImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Estudiante([
            'nombre'=> $row[0],
            'apellido' => $row[1],
            'id_senati' => $row[2],
            'edad' => $row[3],
            'sexo' => $row[4],
            'nota' => $row[5],
            'carrera_id' => $row[6],
        ]);
    }
}
