<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use App\Models\Proyecto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EquipoController extends Controller
{
    /* Esta en es inicio de la vista de los editables de frontend */
    public function vista()
    {
        $proyectos = Proyecto::all();
        
        return view('admin.equipos.vista', compact('proyectos'));
    }
   
    public function index()
    {
        $proyectos = Proyecto::all();
        $equipos = Equipo::all();
        return view('admin.equipos.index', compact('proyectos','equipos'));
    }

   
    public function create()
    {
        $proyectos = Proyecto::all();
        return view('admin.equipos.create', compact('proyectos'));
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'puesto' => 'required',
            'telefono' => 'required',
            'file' => 'image'
        ]); 
        $equipo = Equipo::create($request->all());

        if($request->file('file')){

           $url = Storage::put('equipos', $request->file('file'));

           $equipo->image()->create([
               'url' => $url
           ]);
        }
        return redirect()->route('admin.equipos.index', compact('equipo')); 
    }

    
    public function show($id)
    {
        //
    }

   
    public function edit(Equipo $equipo)
    {
        $proyectos = Proyecto::all();
        
        return view('admin.equipos.edit', compact('proyectos','equipo'));
    }

    public function update(Request $request, Equipo $equipo)
    {
        $request->validate([
            'nombre' => 'required',
            'puesto' => 'required',
            'telefono' => 'required',
            'file' => 'image'
        ]); 
        $equipo->update($request->all());
        if ($request->file('file')) {
         
           $imagenes = $request->file('file')->store('equipos');
           $url = $imagenes;
            if($equipo->image){
                Storage::delete($equipo->image->url);

                $equipo->image->update([
                    'url' => $url
                ]);
            }else{
                $equipo->image()->create([
                    'url' => $url
                ]);
            }
        }
        return redirect()->route('admin.equipos.index',$equipo)->with('info','El Equipo se actualizado con exito');

    }

   
    public function destroy(Equipo $equipo)
    {
        $equipo->delete();
        return redirect()->route('admin.equipos.index');
    }
}
