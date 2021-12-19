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

       $estudiantesM = Estudiante::where('carrera_id', $carrera->id)
                                    ->where('sexo', "mujer")->count();
       $estudiantesH = Estudiante::where('carrera_id', $carrera->id)
                                    ->where('sexo', "hombre")->count(); 


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
      
        return view('admin.estudiantes.crear', compact('proyectos','carrera'));
    }

    public function importExcel(Request $request,Carrera $carrera)
    {
        $file = $request->file('file');
        Excel::import(new EstudianteImport, $file); 

      
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

  

    public function destroy(Estudiante $estudiante)
    {
        $estudiante->delete();
        
        return back()->with('eliminar', 'ok');
    }

   

    public function eliminar(Request $request)
    {
        return $request->all();
        
    }
}
