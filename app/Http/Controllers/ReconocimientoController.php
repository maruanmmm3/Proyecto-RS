<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use App\Models\Reconocimiento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ReconocimientoController extends Controller
{
    
    public function index()
    {
        $proyectos = Proyecto::all();
        $reconocimientos = Reconocimiento::all();
        return view('admin.reconocimientos.index', compact('proyectos','reconocimientos'));
    }

    
    public function create()
    {
        $proyectos = Proyecto::all();
        return view('admin.reconocimientos.create', compact('proyectos'));
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'file' => 'image'
        ]);

        $reconocimiento = Reconocimiento::create($request->all());

        if($request->file('file')){

           $url = Storage::put('reconocimientos', $request->file('file'));

           $reconocimiento->image()->create([
               'url' => $url
           ]);
        }
        return redirect()->route('admin.reconocimientos.index', compact('reconocimiento'));
    }

    
    public function show(Reconocimiento $reconocimiento)
    {
        //
    }

    
    public function edit(Reconocimiento $reconocimiento)
    {
        $proyectos = Proyecto::all();
        return view('admin.reconocimientos.edit', compact('proyectos','reconocimiento'));
    }

    
    public function update(Request $request, Reconocimiento $reconocimiento)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'file' => 'image'
        ]);
        
        $reconocimiento->update($request->all());
        if ($request->file('file')) {
         
           $imagenes = $request->file('file')->store('reconocimientos');
           $url = $imagenes;
            if($reconocimiento->image){
                Storage::delete($reconocimiento->image->url);

                $reconocimiento->image->update([
                    'url' => $url
                ]);
            }else{
                $reconocimiento->image()->create([
                    'url' => $url
                ]);
            }
        }
        return redirect()->route('admin.reconocimientos.index',$reconocimiento)->with('info','El reconocimiento se actualizado con exito');

    }

   
    public function destroy(Reconocimiento $reconocimiento)
    {
        $reconocimiento->delete();
        return redirect()->route('admin.reconocimientos.index');
    }
}
