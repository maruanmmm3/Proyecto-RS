<?php

namespace App\Http\Controllers;

use App\Imports\ParticipanteImport;
use App\Models\Participante;
use App\Models\Proyecto;
use App\Models\Voluntario;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class VoluntarioController extends Controller
{
    
    public function index()
    {
        $proyectos = Proyecto::all();
        $voluntarios = Voluntario::all();

        
        $voluntariadoshoras = [];
        $horas = 0;
        foreach($voluntarios as $voluntarioT){
            $voluntariadoshoras[] = $voluntarioT['hora'];
        }
        foreach($voluntariadoshoras as $actividadTT){
            $horas += $actividadTT;
        }

        return view('admin.voluntarios.index', compact('proyectos','voluntarios','horas'));
    }

    public function vista()
    {
        $proyectos = Proyecto::all();
        return view('admin.voluntarios.vista', compact('proyectos'));
    }

    
    public function create()
    {
        $proyectos = Proyecto::all();
        return view('admin.voluntarios.create', compact('proyectos'));
    }

    public function crear(Voluntario $voluntario)
    {
        $proyectos = Proyecto::all();
        return view('admin.voluntarios.crear', compact('proyectos','voluntario'));
    }

    public function importExcel(Request $request,Voluntario $voluntario)
    {
        $file = $request->file('file');
        Excel::import(new ParticipanteImport, $file); 

        /* $carrera = $request->carrera_id; */

        /* return back()->with('message', 'importacio completa'); */
        return redirect()->route('admin.voluntarios.show', compact('voluntario'));
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'encargado' => 'required',
            'lugar' => 'required',
            'fecha' => 'required',
            'hora' => 'required',
        ]);
        $voluntario = Voluntario::create($request->all());
        return redirect()->route('admin.voluntarios.index', compact('voluntario'));
    }

   
    public function show(Voluntario $voluntario)
    {
        $proyectos = Proyecto::all();
        $participantes = Participante::where('voluntariado_id',$voluntario->id)
                                ->latest('id')
                                ->paginate(30);
        $participantesM = Participante::where('voluntariado_id',$voluntario->id)
                                        ->where('sexo', "mujer")
                                        ->count();
        $participantesH = Participante::where('voluntariado_id',$voluntario->id)
                                        ->where('sexo', "hombre")
                                        ->count();
        $participantetotal = [];
        $participantetotal2 = [];
        foreach($participantes as $participante){
            $participantetotal[] = $participante['nombre'];
        }
        foreach($participantes as $participante){
            $participantetotal2[] = $participante['edad'];
        }

        return view('admin.voluntarios.show', compact('proyectos','voluntario'),["participantesMujer" => json_encode($participantesM),"participantesHombre" => json_encode($participantesH),"participantestotal" => json_encode($participantetotal),"participantestotal2" => json_encode($participantetotal2)]);
    }

   
    public function edit($id)
    {
        //
    }

  
    public function update(Request $request, $id)
    {
        //
    }

  
    public function destroy($id)
    {
        //
    }
}
