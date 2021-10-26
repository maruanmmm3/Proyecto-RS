<?php

namespace App\Http\Controllers;

use App\Models\Orquesta;
use App\Models\Proyecto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OrquestaController extends Controller
{
    
    public function index()
    {
        $proyectos = Proyecto::all();
        $orquestas = Orquesta::all();
        return view('admin.orquestas.index', compact('proyectos','orquestas'));
    }

   
    public function create()
    {
        $proyectos = Proyecto::all();
        $orquesta = Orquesta::all();
        return view('admin.orquestas.create', compact('proyectos','orquesta'));
    }

  
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'file' => 'image'
        ]);
    
        $orquesta = Orquesta::create($request->all());

        if($request->file('file')){
       

           $imagen = $request->file('file')->store('public/orquestas');

           $url = Storage::url($imagen);

            $orquesta->image()->create([
                'url' => $url
            ]);
        }

        return redirect()->route('admin.orquestas.index', compact('orquesta'));
    
    }

 
    public function show($id)
    {
        //
    }

   
    public function edit(Orquesta $orquestum)
    {
        $proyectos = Proyecto::all();
        return view('admin.orquestas.edit', compact('orquestum','proyectos'));
    }

 
    public function update(Request $request, Orquesta $orquestum)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'file' => 'image'
        ]);
    
        $orquestum->update($request->all());
        if ($request->file('file')) {
           /*  $url = Storage::put('productos', $request->file('file')); */
           $imagenes = $request->file('file')->store('public/orquestas');
           $url = Storage::url($imagenes);
            if($orquestum->image){
                Storage::delete($orquestum->image->url);

                $orquestum->image->update([
                    'url' => $url
                ]);
            }else{
                $orquestum->image()->create([
                    'url' => $url
                ]);
            }
        }

        return redirect()->route('admin.orquestas.index',$orquestum)->with('info','La Orquesta se actualizado con exito');;
    }

  
    public function destroy($id)
    {
        //
    }
}
