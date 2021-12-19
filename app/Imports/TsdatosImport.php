<?php

namespace App\Imports;

use App\Models\Tsdatos;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class TsdatosImport implements ToModel, WithHeadingRow
{
    
    public function model(array $row)
    {
        return new Tsdatos([
            
            'nombre_egresados' => $row['nombre_egresados'],
            'egresados_egresados' => $row['egresados_por_promocion'],
            'ingresados_egresados' => $row['ingresados_por_promocion'],
            'nombre_retirados' => $row['nombres_retirados'],
            'retirados_retirados' => $row['retirados'],
            'ingresados_retirados' => $row['ingresados'],
            'nombre_mujer' => $row['nombres_mujer'],
            'cantidad_mujer' => $row['cantidad_de_mujeres'],
            'nombre_mujerformada' => $row['nombres_mujeres_formadas'],
            'cantidad_mujerformada' => $row['cantidad_de_mujeres_formadas'],
        ]);
    }
}
