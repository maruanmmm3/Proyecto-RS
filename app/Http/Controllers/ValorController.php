<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use App\Models\Valor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ValorController extends Controller
{
    
    public function index()
    {
        $proyectos = Proyecto::all();
        $valors = Valor::all();

        return view('admin.valors.index', compact('proyectos','valors'));
    }

   
    public function create()
    {
        $proyectos = Proyecto::all();

        return view('admin.valors.create', compact('proyectos'));
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'texto' => 'required',
            'file' => 'image'
        ]); 

        $valor = Valor::create($request->all());

        if($request->file('file')){

           $url = Storage::put('valors', $request->file('file'));

           $valor->image()->create([
               'url' => $url
           ]);
        } 
        return redirect()->route('admin.valors.index', compact('valor'));
    }

  
    public function show($id)
    {
        //
    }

   
    public function edit(Valor $valor)
    {
        $proyectos = Proyecto::all();
        return view('admin.valors.edit', compact('proyectos','valor'));
    }

    
    public function update(Request $request, Valor $valor)
    {
        $request->validate([
            'texto' => 'required',
            'file' => 'image'
        ]); 
        $valor->update($request->all());
        if ($request->file('file')) {
         
           $imagenes = $request->file('file')->store('valors');
           $url = $imagenes;
            if($valor->image){
                Storage::delete($valor->image->url);

                $valor->image->update([
                    'url' => $url
                ]);
            }else{
                $valor->image()->create([
                    'url' => $url
                ]);
            }
        }
        return redirect()->route('admin.valors.index',$valor)->with('info','El Valor se actualizado con exito');
    }

   
    public function destroy(Valor $valor)
    {
        $valor->delete();
        return redirect()->route('admin.valors.index');
    }
}
