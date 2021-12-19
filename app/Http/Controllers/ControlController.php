<?php

namespace App\Http\Controllers;

use App\Imports\ActividaddosImport;
use App\Imports\TsdatosImport;
use App\Models\Actividaddos;
use App\Models\Estudiante;
use Illuminate\Http\Request;
use App\Models\Proyecto;
use Maatwebsite\Excel\Facades\Excel;

class ControlController extends Controller
{
    public function vista(Proyecto $proyecto)
    {
        $proyectos = Proyecto::all();
        $estudiantesTotal = Estudiante::all()->count();
        $actividaddos = Actividaddos::where('proyecto_id', $proyecto->id)
                                        ->latest('id')
                                        ->paginate('30');

        $actividadesM = Actividaddos::where('proyecto_id', $proyecto->id)
                                        ->where('sexo', "mujer")->count();
        $actividadesH = Actividaddos::where('proyecto_id', $proyecto->id)
                                        ->where('sexo', "hombre")->count(); 
    
        return view('admin.proyectos.vista', compact('proyectos','estudiantesTotal','proyecto','actividaddos'),
        ["actividadesM" => json_encode($actividadesM),"actividadesH" => json_encode($actividadesH)]);
    }

    public function crear(Proyecto $proyecto)
    {
        $proyectos = Proyecto::all();

        return view('admin.proyectos.crear', compact('proyectos','proyecto'));
    }

    public function importExcel(Request $request,Proyecto $proyecto)
    {
        $file = $request->file('file');
        Excel::import(new ActividaddosImport, $file); 
        return redirect()->route('admin.proyectos.vista', compact('proyecto'));
    }

    public function vistaindex(){
        $proyectos = Proyecto::all();
        return view('admin.importaciones.vistaindex', compact('proyectos'));
    }
    public function crearts(){
        $proyectos = Proyecto::all();
        return view('admin.importaciones.crearts', compact('proyectos'));
    }
    public function imports(Request $request){
        $file = $request->file('file');
        Excel::import(new TsdatosImport, $file); 
        return back();
    }
}
