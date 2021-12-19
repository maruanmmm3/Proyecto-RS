<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use App\Models\Promocion;
use Illuminate\Http\Request;
use App\Models\Proyecto;
use Illuminate\Support\Facades\Storage;

class PromocionController extends Controller
{
    
    public function index()
    {
        //
    }

    
    public function create()
    {
        $proyectos = Proyecto::all();

        
        return view('admin.promocions.create', compact('proyectos'));
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'file' => 'image'
        ]);
    
        $promocion = Promocion::create($request->all());

        if($request->file('file')){
       
            $url = Storage::put('promocions', $request->file('file'));

            $promocion->image()->create([
                'url' => $url
            ]);
        }

        return redirect()->route('admin.promocions.edit', compact('promocion'));
    }

  
    public function show($id)
    {
        //
    }

   
    public function edit(Promocion $promocion)
    {
        $proyectos = Proyecto::all();

        return view('admin.promocions.edit', compact('promocion','proyectos'));
    }

   
    public function update(Request $request, Promocion $promocion)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'file' => 'image'
        ]);
        $promocion->update($request->all());
        if ($request->file('file')) {
          
           $imagenes = $request->file('file')->store('public/promocions');
           $url = $imagenes;
            if($promocion->image){
                Storage::delete($promocion->image->url);

                $promocion->image->update([
                    'url' => $url
                ]);
            }else{
                $promocion->image()->create([
                    'url' => $url
                ]);
            }
        }
        return redirect()->route('admin.technicals.index',$promocion)->with('info','La Promoción se actualizado con exito');
    }

  
    public function destroy(Promocion $promocion)
    {
        $promocion->delete();
        return redirect()->route('admin.technicals.index')->with('info','La Promoción se elimino con exito');
    }
}
