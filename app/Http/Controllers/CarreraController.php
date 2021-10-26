<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use App\Models\Promocion;
use Illuminate\Http\Request;
use App\Models\Proyecto;
use PHPUnit\Framework\Constraint\Count;

class CarreraController extends Controller
{
  
    public function index()
    {
        
        $proyectos = Proyecto::all();
        $carreras = Carrera::all(); 
        return view('admin.carreras.index', compact('proyectos','carreras'));
    }

    public function vista(Promocion $promocion)
    {
        $proyectos = Proyecto::all();
        $carreras = Carrera::where('promocion_id', $promocion->id)
                                ->latest('id')
                                ->paginate(5);
      
        $carrerasTo = Carrera::all()->count();
        $promocionesTo = Promocion::all()->count();
       /*  $promocionesG= Promocion::where('')->id->count();  */


        return view('admin.carreras.vista', compact('proyectos','carreras','promocion'),["carreratotal" => json_encode($carrerasTo),"promociontotal" => json_encode($promocionesTo)]);
    }

 /* 
    public function create()
    {
        $proyectos = Proyecto::all();
        $carreras = Carrera::all();
        $promocions = Promocion::pluck('nombre','id');
        return view('admin.carreras.create', compact('proyectos','carreras','promocions'));
    } */
    public function crear(Promocion $promocion)
    {
        $proyectos = Proyecto::all();
        $carreras = Carrera::all();
        return view('admin.carreras.crear', compact('proyectos','carreras','promocion'));
    }


   
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'promocion_id' => 'required'
        ]);
        $carrera = Carrera::create($request->all());
        $promocion = $request->promocion_id;
        
        return redirect()->route('admin.carreras.vista', compact('promocion'))->with('info','La Carrera se creo con exito');
    }

  
    public function show($id)
    {
        //
    }

   
    public function edit(Promocion $promocion)
    {
        $proyectos = Proyecto::all();
        return view('admin.carreras.edit', compact('promocion','proyectos'));
    }

    
    public function update(Request $request, $id)
    {
        //
    }

  
    public function destroy(Carrera $carrera)
    {
       
        $carrera->delete();
        return back();
        /* return redirect()->route('admin.carreras.vista', compact('promocion'))->with('info','La carrera ha sido Eliminado'); */
    }

    
}
