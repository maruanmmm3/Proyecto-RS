<?php

namespace App\Http\Controllers\Inicio;

use App\Http\Controllers\Controller;
use App\Models\Contacto;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index(){
        return view('inicios.index');
    }

    public function nosotro(){
        return view('inicios.nosotro');
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
