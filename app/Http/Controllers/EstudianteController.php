<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use App\Models\Estudiante;
use App\Models\Proyecto;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\EstudianteImport;

class EstudianteController extends Controller
{
  
    public function index()
    {
        $proyectos = Proyecto::all();
        $estudiantes = Estudiante::all();
        return view('admin.estudiantes.index', compact('proyectos','estudiantes'));
    }

    public function vista(Carrera $carrera)
    {
        $proyectos = Proyecto::all();
        $estudiantes = Estudiante::where('carrera_id', $carrera->id)
                                ->latest('id')
                                ->paginate(30);

        $estudiantesNumero = Estudiante::where('carrera_id', $carrera->id)->count();

       $estudiantesM = Estudiante::where('sexo', "mujer")->count();
       $estudiantesH = Estudiante::where('sexo', "hombre")->count(); 


        $estudiantestotal = [];
        $estudiantestotalnotas = [];

        foreach($estudiantes as $estudiante){
            $estudiantestotal[] = $estudiante['nombre'];
        }

        foreach($estudiantes as $estudiante){
            $estudiantestotalnotas[] = $estudiante['nota'];
        }

        return view('admin.estudiantes.vista', compact('carrera','proyectos','estudiantes','estudiantesNumero'),["estudiantesMujer" => json_encode($estudiantesM),"estudiantesHombre" => json_encode($estudiantesH),"estudiantemega" => json_encode($estudiantestotal),"estudiantenotas" => json_encode($estudiantestotalnotas)]);
    }

   
    public function create()
    {
        //
    }
    public function crear(Carrera $carrera)
    {
        $proyectos = Proyecto::all();
        /* $carreras = Carrera::all(); */
        return view('admin.estudiantes.crear', compact('proyectos','carrera'));
    }

    public function importExcel(Request $request,Carrera $carrera)
    {
        $file = $request->file('file');
        Excel::import(new EstudianteImport, $file); 

        /* $carrera = $request->carrera_id; */

        /* return back()->with('message', 'importacio completa'); */
        return redirect()->route('admin.estudiantes.vista', compact('carrera'));
    }

  
    public function store(Request $request)
    {
        //
    }

   
    public function show($id)
    {
        //
    }

  
    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

  /*   public function destroy(Estudiante $estudiante)
    {
        $estudiante->delete();
        return redirect()->route('admin.technicals.index')->with('info','El Estudiante se elimino con exito');
    } */

    public function destroy(Estudiante $estudiante)
    {
        $estudiante->delete();
        /* return redirect()->route('admin.technicals.index')->with('info','El Estudiante se elimino con exito'); */
        return back()->with('eliminar', 'ok');
    }

   /*  public function eliminar(Estudiante $estudiante, Carrera $carrera)
    {
        $estudiante->delete();
        return redirect()->route('admin.estudiantes.vista',$carrera)->with('info','El Producto se elimino con exito');
    } */

    public function eliminar(Request $request)
    {
        return $request->all();
        /* $estudiante->delete();
        return redirect()->route('admin.estudiantes.vista',$carrera)->with('info','El Producto se elimino con exito'); */
    }
}
