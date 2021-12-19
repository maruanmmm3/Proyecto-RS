<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use App\Models\Estudiante;
use App\Models\Proyecto;
use Illuminate\Http\Request;

class MensajeController extends Controller
{
   
    public function index()
    {
        $proyectos = Proyecto::all();
        $mensajes = Contacto::all();

        return view('admin.mensajes.index', compact('proyectos','mensajes'));
    }

    
    public function create()
    {
        
    }

   
    public function store(Request $request)
    {
        //
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

  
    public function destroy(Contacto $mesaje)
    {
        $mesaje->delete();
        return redirect()->route('admin.mensajes.index');
    }
}
