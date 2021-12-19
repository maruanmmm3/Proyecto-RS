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
                    <img src="{{asset('images/frontend.png')}}" alt="">
                </div>
                <div class="card-body text-center vh-40">
                    <strong>Equipos de Gestion</strong>
                </div>
                <div class="w-100 d-flex justify-content-lg-end p-3">
                    <a href="{{ route('admin.equipos.index') }}" class="fa fa-eye icon-card" style="font-size:2.4em"></a> 
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-3">
            <div class="card">
                <div class="w-100 d-flex justify-content-center">
                    <img src="{{asset('images/frontend.png')}}" alt="">
                </div>
                <div class="card-body text-center vh-40">
                    <strong>Valores de la Empresa</strong>
                </div>
                <div class="w-100 d-flex justify-content-lg-end p-3">   
                    <a href="{{ route('admin.valors.index') }}" class="fa fa-eye icon-card" style="font-size:2.4em"></a> 
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-3">
            <div class="card">
                <div class="w-100 d-flex justify-content-center">
                    <img src="{{asset('images/frontend.png')}}" alt="">
                </div>
                <div class="card-body text-center vh-40">
                    <strong>Galeria de Imagenes</strong>
                </div>
                <div class="w-100 d-flex justify-content-lg-end p-3">   
                   <a href="{{ route('admin.galerias.index') }}" class="fa fa-eye icon-card" style="font-size:2.4em"></a>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-3">
            <div class="card">
                <div class="w-100 d-flex justify-content-center">
                    <img src="{{asset('images/frontend.png')}}" alt="">
                </div>
                <div class="card-body text-center vh-40">
                    <strong>Galeria de Imagenes Inferior</strong>
                </div>
                <div class="w-100 d-flex justify-content-lg-end p-3">   
                   <a href="{{ route('admin.fotos.index') }}" class="fa fa-eye icon-card" style="font-size:2.4em"></a>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-3">
            <div class="card">
                <div class="w-100 d-flex justify-content-center">
                    <img src="{{asset('images/frontend.png')}}" alt="">
                </div>
                <div class="card-body text-center vh-40">
                    <strong>Proyectos fron</strong>
                </div>
                <div class="w-100 d-flex justify-content-lg-end p-3">   
                   <a href="{{ route('admin.proyectos.index') }}" class="fa fa-eye icon-card" style="font-size:2.4em"></a>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-3">
            <div class="card">
                <div class="w-100 d-flex justify-content-center">
                    <img src="{{asset('images/frontend.png')}}" alt="">
                </div>
                <div class="card-body text-center vh-40">
                    <strong>Reconocimientos Nosotros</strong>
                </div>
                <div class="w-100 d-flex justify-content-lg-end p-3">   
                   <a href="{{ route('admin.reconocimientos.index') }}" class="fa fa-eye icon-card" style="font-size:2.4em"></a>
                </div>
            </div>
        </div>

       {{--  <div class="col-lg-3 col-md-3">
            <div class="card">
                <div class="w-100 d-flex justify-content-center">
                    <img src="{{asset('images/frontend.png')}}" alt="">
                </div>
                <div class="card-body text-center vh-40">
                    <strong>Proyectos</strong>
                </div>
                <div class="w-100 d-flex justify-content-lg-end p-3">   
                   <a href="" class="fa fa-eye icon-card" style="font-size:2.4em"></a>
                </div>
            </div>
        </div> --}}
        
    
</div>
@endsection