<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;
use App\Models\Proyecto;
use Illuminate\Support\Facades\Storage;

class ProyectoController extends Controller
{
    
    public function index()
    {
        $proyectos = Proyecto::all();
        $estudiantes = Estudiante::all()->count();
        return view('admin.proyectos.index', compact('proyectos','estudiantes'));
    }

   
    public function create()
    {
        $proyectos = Proyecto::all();
        return view('admin.proyectos.create', compact('proyectos'));
    }

  
    public function store(Request $request)
    {
        /* return $request->file('file'); */
       /*  return Storage::put('proyectos', $request->file('file')); */
        $request->validate([
            'nombre' => 'required',
            'proposito' => 'required',
            'file' => 'image'
        ]); 
        /* return $request->all(); */
        /* return $request->file('file'); */
        /* Storage::put('proyectos', $request->file('file')); */

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

  
    public function edit($id)
    {
        //
    }

  
    public function update(Request $request, $id)
    {
        //
    }

 
    public function destroy(Proyecto $proyecto)
    {
        $proyecto->delete();
        return redirect()->route('admin.proyectos.index')->with('info','El Proyecto ha sido Eliminado');
    }

  
}
