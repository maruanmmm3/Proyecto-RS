<?php

namespace App\Imports;

use App\Models\Participante;
use Maatwebsite\Excel\Concerns\ToModel;

class ParticipanteImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Participante([
            'nombre'=> $row[0],
            'colegio' => $row[1],
            'sexo' => $row[2],
            'edad' => $row[3],
            'voluntariado_id' => $row[4],
        ]);
    }
}
