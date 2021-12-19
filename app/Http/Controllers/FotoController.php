<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Models\Proyecto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FotoController extends Controller
{
   
    public function index()
    {
        $proyectos = Proyecto::all();
        $fotos = Foto::all();
        return view('admin.fotos.index', compact('proyectos','fotos'));
    }

    
    public function create()
    {
        $proyectos = Proyecto::all();
        return view('admin.fotos.create', compact('proyectos'));
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'file' => 'image'
        ]); 
        
        $foto = Foto::create($request->all());

        if($request->file('file')){

           $url = Storage::put('fotos', $request->file('file'));

           $foto->image()->create([
               'url' => $url
           ]);
        }
        return redirect()->route('admin.fotos.index', compact('foto')); 
    }

   
    public function show($id)
    {
        //
    }

   
    public function edit(Foto $foto)
    {
        $proyectos = Proyecto::all();
        return view('admin.fotos.edit', compact('proyectos','foto'));
    }

   
    public function update(Request $request, Foto $foto)
    {
        $request->validate([
            'nombre' => 'required',
            'file' => 'image'
        ]); 

        $foto->update($request->all());
        if ($request->file('file')) {
         
           $imagenes = $request->file('file')->store('equipos');
           $url = $imagenes;
            if($foto->image){
                Storage::delete($foto->image->url);

                $foto->image->update([
                    'url' => $url
                ]);
            }else{
                $foto->image()->create([
                    'url' => $url
                ]);
            }
        }
        return redirect()->route('admin.fotos.index',$foto)->with('info','La Imagen se actualizado con exito');
    }

 
    public function destroy(Foto $foto)
    {
        $foto->delete();
        return redirect()->route('admin.fotos.index');
    }
}
