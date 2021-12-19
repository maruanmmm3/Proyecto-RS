@extends('layouts.app')

@section('contenido')
<div class="row">
    

        @if (session('info'))
            <div class="alert alert-success">
                <strong>{{ session('info') }}</strong>
            </div>
        @endif

        

        <div class="col-lg-3 col-md-3">
            <div class="card">
                <div class="w-100 d-flex justify-content-center">
                    <img src="{{asset('images/tslibros.jpg')}}" alt="">
                </div>
                <div class="card-body text-center vh-40">
                    <strong>Importar Archivo de Ts</strong>
                </div>
                <div class="w-100 d-flex justify-content-lg-end p-3">
                    <a href="{{ route('admin.importaciones.crearts') }}" class="fa fa-cloud-upload" style="font-size:2.4em"></a> 
                </div>
            </div>
        </div>

        
    
</div>
@endsection