<?php

namespace App\Http\Controllers;

use App\Models\Beneficiado;
use App\Models\Estudiante;
use App\Models\Proyecto;
use App\Models\Sembrando;
use Illuminate\Http\Request;

class SembrandoController extends Controller
{
    
    public function index()
    {
        $proyectos = Proyecto::all();
        $sembrandos = Sembrando::all();

        return view('admin.sembrandos.index', compact('proyectos','sembrandos'));
    }

   
    public function create()
    {
        $proyectos = Proyecto::all();
        $sembrandos = Sembrando::all();

        
        return view('admin.sembrandos.create', compact('proyectos','sembrandos'));
    }

    public function crear(Sembrando $sembrando)
    {
        $proyectos = Proyecto::all();
        $sembrandos = Sembrando::all();

        return view('admin.sembrandos.crear', compact('proyectos','sembrandos','sembrando'));
    }
    public function creando(Request $request,Sembrando $sembrando)
    {
        $request->validate([
            'year' => 'required',
            'arbol' => 'required',
            'hombre' => 'required',
            'mujer' => 'required',
            'area' => 'required',
            'sembrando_id' => 'required'
        ]);

        $beneficiado = Beneficiado::create($request->all());
        $sembrando = $request->sembrando_id;
        return redirect()->route('admin.sembrandos.show', compact('beneficiado','sembrando'));
    }

  
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'fecha' => 'required'
        ]);
        $sembrando = Sembrando::create($request->all());
        return redirect()->route('admin.sembrandos.index',compact('sembrando'));

    }

    public function show(Sembrando $sembrando)
    {
        $proyectos = Proyecto::all();
        $beneficiados= Beneficiado::where('sembrando_id',$sembrando->id)
                                ->latest('id')
                                ->paginate('30');

        $beneficiadosarbol = [];
        $beneficiadoshombre = [];
        $beneficiadosmujer = [];
        $arbol = 0;
        $hombre = 0;
        $mujer = 0;

        foreach($beneficiados as $beneficiado){
                $beneficiadosarbol[] = $beneficiado['arbol'];
                $beneficiadoshombre[] = $beneficiado['hombre'];
                $beneficiadosmujer[] = $beneficiado['mujer'];
        }

      foreach($beneficiadosarbol as $beneficiado){
            $arbol += $beneficiado;
        }
        foreach($beneficiadoshombre as $beneficiado){
            $hombre += $beneficiado;
        }
        foreach($beneficiadosmujer as $beneficiado){
            $mujer += $beneficiado;
        }
        
        return view('admin.sembrandos.show', compact('proyectos','sembrando','beneficiados'),["arbolT" => json_encode($arbol),"hombreT" => json_encode($hombre),"mujerT" => json_encode($mujer)]); 
    }

 
    public function edit(Sembrando $sembrando)
    {
        $proyectos = Proyecto::all();
        return view('admin.sembrandos.edit', compact('proyectos','sembrando'));
    }


    public function update(Request $request, Sembrando $sembrando)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'fecha' => 'required'
        ]);
        $sembrando->update($request->all());
        return redirect()->route('admin.sembrandos.index',$sembrando)->with('info','Sembrando se ha actualizado con exito');
    }

    public function destroy(Sembrando $sembrando)
    {
        $sembrando->delete();
        return redirect()->route('admin.sembrandos.index')->with('info','El Proyecto ha sido Eliminado');
    }
    public function eliminar(Beneficiado $beneficiado)
    {
        $beneficiado->delete();
        /* return redirect()->route('admin.sembrandos.show')->with('info','El Proyecto ha sido Eliminado'); */
        return back();
    }
}
