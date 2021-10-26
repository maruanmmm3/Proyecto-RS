<?php

namespace App\Http\Controllers;

use App\Imports\ActividadImport;
use App\Models\Actividad;
use App\Models\Navidad;
use App\Models\Proyecto;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Calculation\MathTrig\Sum;

class NavidadController extends Controller
{
    //Aqui no olvidar que esta ver en la ruta resourse
    public function index()
    {
        $proyectos = Proyecto::all();
        $navidads = Navidad::all();
        return view('admin.navidads.index', compact('proyectos','navidads'));
    }
    public function vista()
    {
        $proyectos = Proyecto::all();
        return view('admin.navidads.vista', compact('proyectos'));
    }

    public function mirar(Navidad $navidad)
    {
        $proyectos = Proyecto::all();
        $actividades = Actividad::where('navidad_id', $navidad->id)
                                    ->latest('id')
                                    ->paginate(30);

        

        $actividadestotal = [];
        $actividadestotal2 = [];
        $actividadestotal3 = [];
        $actividadestotal4 = [];
        $actividadestotalInstitucion = [];
        $horas = 0; 
        $volun = 0;
        $bene = 0;
        $horaseje = 0;
        foreach($actividades as $actividad){
            $actividadestotal[] = $actividad['cant_hor'];
        }
        foreach($actividades as $actividad){
            $actividadestotal2[] = $actividad['cant_vol'];
        }
        foreach($actividades as $actividad){
            $actividadestotal3[] = $actividad['cant_ben'];
        }
        foreach($actividades as $actividad){
            $actividadestotal4[] = $actividad['cant_horeje'];
        }
        foreach($actividades as $actividad){
            $actividadestotalInstitucion[] = $actividad['institucion'];
        }

        foreach($actividadestotal as $actividadT){
            $horas += $actividadT;
        }

        foreach($actividadestotal2 as $actividadT){
            $volun += $actividadT;
        }

        foreach($actividadestotal3 as $actividadT){
            $bene += $actividadT;
        }
        foreach($actividadestotal4 as $actividadT){
            $horaseje += $actividadT;
        }
        
            /* $actividadestotalInstitucion[] = $actividad['institucion']; */
            return view('admin.navidads.mirar', compact('proyectos','navidad','actividades'),["actividadMega" => json_encode($actividadestotal),"actividadMega2" => json_encode($actividadestotal4),"horastotales" => json_encode($horas),"voluntotales" => json_encode($volun),"benetotales" => json_encode($bene),"horasejetotales" => json_encode($horaseje),"institucionestotales" => json_encode($actividadestotalInstitucion)]);
    }


    public function create()
    {
        $proyectos = Proyecto::all();
        $navidads = Navidad::all();
        return view('admin.navidads.create', compact('proyectos','navidads'));
    }

    public function crear(Navidad $navidad)
    {
        $proyectos = Proyecto::all();
        $navidads = Navidad::all();
        return view('admin.navidads.crear', compact('proyectos','navidads','navidad'));
    }

    public function importExcel(Request $request,Navidad $navidad)
    {
        $file = $request->file('file');
        Excel::import(new ActividadImport, $file); 

        /* $carrera = $request->carrera_id; */

        /* return back()->with('message', 'importacio completa'); */
        return redirect()->route('admin.navidads.show', compact('navidad'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'fecha' => 'required'
        ]);
        $navidad = Navidad::create($request->all());

        return redirect()->route('admin.navidads.index',compact('navidad'));
    }

    public function show(Navidad $navidad)
    {
        $proyectos = Proyecto::all();
        return view('admin.navidads.show', compact('navidad','proyectos'));
    }

    public function edit($id)
    {
        //
    }

 
    public function update(Request $request, $id)
    {
        //
    }


    public function destroy(Actividad $navidad)
    {
        $navidad->delete();
        return back()->with('eliminar', 'ok');
    }
    /* public function eliminar(Actividad $actividad)
    {
        $actividad->delete();
        return back()->with('eliminar', 'ok');
    } */
}
