<?php

namespace App\Imports;

use App\Models\Actividad;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ActividadImport implements ToModel, WithHeadingRow
{

    public function model(array $row)
    {
        return new Actividad([
            'institucion'=> $row['colegio'],
            'cant_ben' => $row['beneficiados'],
            'cant_vol' => $row['voluntarios'],
            'cant_rega' => $row['regalos'],
            'cant_hor' => $row['horas'],
            'cant_horeje' => $row['horas_ejecutadas'],
            'area' => $row['area'],
            'fech_inicio' =>  Date::excelToDateTimeObject($row['fecha_inicio']),
            'fech_fin' =>  Date::excelToDateTimeObject($row['fecha_fin']),
            'navidad_id' => $row['codigo_de_grupo'],
        ]);
    }
}
