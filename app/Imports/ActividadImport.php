<?php

namespace App\Imports;

use App\Models\Actividad;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Maatwebsite\Excel\Concerns\ToModel;

class ActividadImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Actividad([
            'institucion'=> $row[0],
            'cant_ben' => $row[1],
            'cant_vol' => $row[2],
            'cant_hor' => $row[3],
            'cant_horeje' => $row[4],
            'area' => $row[5],
            'fech_inicio' =>  Date::excelToDateTimeObject($row[6]),
            'fech_fin' =>  Date::excelToDateTimeObject($row[7]),
            'navidad_id' => $row[8],
        ]);
    }
}
