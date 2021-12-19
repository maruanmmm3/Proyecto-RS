<?php

namespace App\Http\Controllers\Inicio;

use App\Http\Controllers\Controller;
use App\Models\Contacto;
use App\Models\Equipo;
use App\Models\Foto;
use App\Models\Galeria;
use App\Models\Navidad;
use App\Models\Promocion;
use App\Models\Proyecto;
use App\Models\Reconocimiento;
use App\Models\Sembrando;
use App\Models\Valor;
use App\Models\Voluntario;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index(){
        $proyectos = Proyecto::all();
        $equipos = Equipo::all();
        $galerias = Galeria::all();
        $fotos = Foto::all();
        return view('inicios.index',compact('proyectos','equipos','galerias','fotos'));
    }

    public function nosotro(){
        $valors = Valor::all();
        $navidads = Navidad::all();
        $promocions = Promocion::all();
        $sembrandos = Sembrando::all();
        $voluntarios = Voluntario::all();
        $reconocimientos = Reconocimiento::all();
        return view('inicios.nosotro',compact('valors','navidads','promocions','sembrandos','voluntarios','reconocimientos'));
    }

    public function contactano(){
        return view('inicios.contactano');
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required'
        ]);

        $contacto = Contacto::create($request->all());

       /*  $correo = new ContactanosMailable($request->all());
        Mail::to('pizzamostra33@gmail.com')->send($correo); */
    
        return redirect()->route('inicios.contactano')->with('info', "Mensaje Enviado");
    }
    
}
