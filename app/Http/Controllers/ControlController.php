<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proyecto;

class ControlController extends Controller
{
    public function vista()
    {
        $proyectos = Proyecto::all();
        return view('admin.proyectos.vista', compact('proyectos'));
    }
}
