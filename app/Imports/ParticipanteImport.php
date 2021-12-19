<?php

namespace App\Imports;

use App\Models\Participante;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ParticipanteImport implements ToModel, WithHeadingRow
{
  
    public function model(array $row)
    {
        return new Participante([
            'nombre'=> $row['nombre'],
            'colegio' => $row['colegio'],
            'sexo' => $row['genero'],
            'edad' => $row['edad'],
            'voluntariado_id' => $row['codigo_de_grupo'],
        ]);
    }
}
