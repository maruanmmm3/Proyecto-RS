<?php

namespace App\Http\Controllers;

use App\Models\Galeria;
use App\Models\Proyecto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriaController extends Controller
{
    
    public function index()
    {
        $proyectos = Proyecto::all();
        $galerias = Galeria::all();
        return view('admin.galerias.index', compact('proyectos','galerias'));
    }

   
    public function create()
    {
        $proyectos = Proyecto::all();
        return view('admin.galerias.create', compact('proyectos'));
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'file' => 'image'
        ]); 
        
        $galeria = Galeria::create($request->all());

        if($request->file('file')){

           $url = Storage::put('galerias', $request->file('file'));

           $galeria->image()->create([
               'url' => $url
           ]);
        }
        return redirect()->route('admin.galerias.index', compact('galeria')); 
    }
    

    
    public function show($id)
    {
        //
    }

   
    public function edit(Galeria $galerium)
    {
        $proyectos = Proyecto::all();
        return view('admin.galerias.edit', compact('proyectos','galerium'));
    }

  
    public function update(Request $request, Galeria $galerium)
    {
        $request->validate([
            'nombre' => 'required',
            'file' => 'image'
        ]); 

        $galerium->update($request->all());
        if ($request->file('file')) {
         
           $imagenes = $request->file('file')->store('equipos');
           $url = $imagenes;
            if($galerium->image){
                Storage::delete($galerium->image->url);

                $galerium->image->update([
                    'url' => $url
                ]);
            }else{
                $galerium->image()->create([
                    'url' => $url
                ]);
            }
        }
        return redirect()->route('admin.galerias.index',$galerium)->with('info','La Imagen se actualizado con exito');

    }

   
    public function destroy(Galeria $galerium)
    {
        $galerium->delete();
        return redirect()->route('admin.galerias.index');
    }
}
