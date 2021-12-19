<?php

namespace App\Http\Controllers;

use App\Models\Beneficiado;
use Illuminate\Http\Request;

class BeneficiadoController extends Controller
{
    
    public function index()
    {
        //
    }

    
    public function create()
    {
        //
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

   
    public function destroy(Beneficiado $beneficiado)
    {
        $beneficiado->delete();
        return back();
    }
}
