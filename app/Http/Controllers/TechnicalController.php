<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use App\Models\Promocion;
use App\Models\Technical;
use App\Models\Proyecto;
use Illuminate\Http\Request;

class TechnicalController extends Controller
{
    
    public function index()
    {
        $proyectos = Proyecto::all();
        $promocions = Promocion::all();

        return view('admin.technicals.index', compact('proyectos','promocions'));
    }

    
    public function create()
    {
        $proyectos = Proyecto::all();

        return view('admin.technicals.create', compact('proyectos'));
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

    
    public function destroy($id)
    {
        //
    }
}
