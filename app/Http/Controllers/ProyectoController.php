<?php

namespace App\Http\Controllers;

use App\Models\Actividad;
use App\Models\Beneficiado;
use App\Models\Carrera;
use App\Models\Estudiante;
use App\Models\Participante;
use App\Models\Promocion;
use Illuminate\Http\Request;
use App\Models\Proyecto;
use App\Models\Tsdatos;
use App\Models\Voluntario;
use Illuminate\Support\Facades\Storage;

class ProyectoController extends Controller
{
    
    public function index()
    {
        $proyectos = Proyecto::all();
        $estudiantes = Estudiante::all()->count();
        $actividades = Actividad::all();
        $beneficiados = Beneficiado::all();
        

        $estudiantesTotal = Estudiante::all()->count();

        $actividadestotal3 = [];
        $beneficiadostotal3 = [];
        $regalostotal3 = [];
        

        $bene = 0;
        $sem = 0;
        $rega = 0;
        /* regalos */
        foreach($actividades as $actividad){
            $regalostotal3[] = $actividad['cant_rega'];
        }
        foreach($regalostotal3 as $actividadR){
            $rega += $actividadR;
        }


        foreach($actividades as $actividad){
            $actividadestotal3[] = $actividad['cant_ben'];
        }
        foreach($actividadestotal3 as $actividadT){
            $bene += $actividadT;
        }
        foreach($beneficiados as $beneficiado){
            $beneficiadostotal3[] = $beneficiado['arbol'];
        }
        foreach($beneficiadostotal3 as $beneficiadoT){
            $sem += $beneficiadoT;
        }

        return view('admin.proyectos.index', compact('proyectos','estudiantes','estudiantesTotal','bene','sem'));
    }

    public function datos()
    {
        $proyectos = Proyecto::all();
        $estudiantes = Estudiante::all()->count();
        $actividades = Actividad::all();
        $beneficiados = Beneficiado::all();
        $voluntarios = Voluntario::all();
        $tsdatos = Tsdatos::all();        

        $carrerasTo = Carrera::all()->count();
        $promocionesTo = Promocion::all()->count();



        $estudiantesM = Estudiante::where('sexo', "mujer")->count();
        $estudiantesH = Estudiante::where('sexo', "hombre")->count(); 

        $participantesM = Participante::where('sexo', "mujer")->count();
        $participantesH = Participante::where('sexo', "hombre")->count();

        $participantesTotal = Participante::all()->count();

        $voluntariosTotal = Voluntario::all()->count();


        $estudiantesTotal = Estudiante::all()->count();

        $actividadestotal = [];
        $actividadestotal2 = [];
        $actividadestotal3 = [];
        $actividadestotal4 = [];

        /* PARA TS */

        $egresados = [];
        $ingresados = [];

        $retiradosretirados = [];
        $ingresadosretirados = [];

        $cantidadmujeres = [];
        $cantidadmujeresforjadas = [];

        /* FIN TS */

        $beneficiadostotal3 = [];
        $regalostotal3 = [];
        $voluntarioshoras = [];
        $presupuestoestimado = [];
        $ejecucionreal = [];

        /* PARA TS */

        $ts1 = 0;
        $ts2 = 0;
        $ts3 = 0;
        $ts4 = 0;
        $ts5 = 0;
        $ts6 = 0;

        $horas = 0; 
        $horasvolun = 0;
        $volun = 0;
        $bene = 0;
        $horaseje = 0;

        $presu = 0;
        $ejecu = 0;

        $sem = 0;
        $rega = 0;


        /* TS DATOS PAR APAMELA DE TS */
        foreach($tsdatos as $tsdato){
            $egresados[] = $tsdato['egresados_egresados'];
            $ingresados [] = $tsdato['ingresados_egresados'];

            $retiradosretirados[] = $tsdato['retirados_retirados'];
            $ingresadosretirados[] = $tsdato['ingresados_retirados'];

            $cantidadmujeres[] = $tsdato['cantidad_mujer'];
            $cantidadmujeresforjadas[] = $tsdato['cantidad_mujerformada'];
        }

        foreach($egresados as $dato){
            $ts1 += $dato;
        }
        foreach($ingresados as $dato){
            $ts2 += $dato;
        }
        foreach($retiradosretirados as $dato){
            $ts3 += $dato;
        }
        foreach($ingresadosretirados as $dato){
            $ts4 += $dato;
        }
        foreach($cantidadmujeres as $dato){
            $ts5 += $dato;
        }
        foreach($cantidadmujeresforjadas as $dato){
            $ts6 += $dato;
        }


        /* voluntariados presupuesto sumas */
        foreach($voluntarios as $voluntario){
            $presupuestoestimado[] = $voluntario['presupuestoesti'];
            $ejecucionreal[] = $voluntario['ejecucionreal'];
        }

        foreach($presupuestoestimado as $voluntarioP){
            $presu += $voluntarioP;
        }

        foreach($ejecucionreal as $voluntarioE){
            $ejecu += $voluntarioE;
        }


        /* regalos */

        foreach($actividades as $actividad){
            $regalostotal3[] = $actividad['cant_rega'];
        }
        foreach($regalostotal3 as $actividadR){
            $rega += $actividadR;
        }

        /* voluntarios horas */

        foreach($voluntarios as $voluntario){
            $voluntarioshoras[] = $voluntario['hora'];
        }
        foreach($voluntarioshoras as $voluntarioH){
            $horasvolun += $voluntarioH;
        }


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


        foreach($beneficiados as $beneficiado){
            $beneficiadostotal3[] = $beneficiado['arbol'];
        }
        foreach($beneficiadostotal3 as $beneficiadoT){
            $sem += $beneficiadoT;
        }



        /* "benetotales" => json_encode($bene) */

        return view('admin.datos.index', compact('proyectos','estudiantes','estudiantesTotal','bene','sem','rega'),
        ["carreratotal" => json_encode($carrerasTo),"promociontotal" => json_encode($promocionesTo),
        "estudiantesMujer" => json_encode($estudiantesM),"estudiantesHombre" => json_encode($estudiantesH),
        "horastotales" => json_encode($horas),"voluntotales" => json_encode($volun),"regatotales" => json_encode($rega),
        "horasejetotales" => json_encode($horaseje),"participantesMujer" => json_encode($participantesM),
        "participantesHombre" => json_encode($participantesH),"participantesTotal" => json_encode($participantesTotal),
        "voluntariosTotal" => json_encode($voluntariosTotal),"horasvolun" => json_encode($horasvolun),
        "presupuestoesti" => json_encode($presu),"ejecucionreal" => json_encode($ejecu),
        "egresados" => json_encode($ts1),"ingresados" => json_encode($ts2),"retiradosretirados" => json_encode($ts3),
        "ingresadosretirados" => json_encode($ts4),"cantidadmujeres" => json_encode($ts5),"cantidadmujeresforjadas" => json_encode($ts6),
        ]);
    }


    public function vista()
    {
        $proyectos = Proyecto::all();
        $estudiantes = Estudiante::all()->count();

        $estudiantesTotal = Estudiante::all()->count();
        return view('admin.proyectos.index', compact('proyectos','estudiantes','estudiantesTotal'));
    }

   
    public function create()
    {
        $proyectos = Proyecto::all();

        $estudiantesTotal = Estudiante::all()->count();
        return view('admin.proyectos.create', compact('proyectos','estudiantesTotal'));
    }

  
    public function store(Request $request)
    {
       
        $request->validate([
            'nombre' => 'required',
            'proposito' => 'required',
            'file' => 'image'
        ]); 
        

       $proyecto = Proyecto::create($request->all());

        if($request->file('file')){

           $url = Storage::put('proyectos', $request->file('file'));

           $proyecto->image()->create([
               'url' => $url
           ]);
        } 

        return redirect()->route('admin.proyectos.index', compact('proyecto'));
    }

  
    public function show($id)
    {
        //
    }

  
    public function edit(Proyecto $proyecto)
    {
        $proyectos = Proyecto::all();
        return view('admin.proyectos.edit', compact('proyectos','proyecto'));
    }

  
    public function update(Request $request, Proyecto $proyecto)
    {
        $request->validate([
            'nombre' => 'required',
            'proposito' => 'required',
            'file' => 'image'
        ]); 

        $proyecto->update($request->all());
        if ($request->file('file')) {
         
           $imagenes = $request->file('file')->store('proyectos');
           $url = $imagenes;
            if($proyecto->image){
                Storage::delete($proyecto->image->url);

                $proyecto->image->update([
                    'url' => $url
                ]);
            }else{
                $proyecto->image()->create([
                    'url' => $url
                ]);
            }
        }
        return redirect()->route('admin.proyectos.index',$proyecto)->with('info','La Imagen se actualizado con exito');

    }

 
    public function destroy(Proyecto $proyecto)
    {
        $proyecto->delete();
        return redirect()->route('admin.proyectos.index')->with('info','El Proyecto ha sido Eliminado');
    }

  
}
