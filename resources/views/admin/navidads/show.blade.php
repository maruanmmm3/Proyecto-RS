@extends('layouts.app')

@section('contenido')
<div class="row">
    <div class="col-lg-6 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="container" style="position: relative;">
                    <img src="{{asset('images/navidad1.png')}}" style="height: 250px; width: 100%; object-fit: cover;" alt="">
                    <div 
                        class="d-flex justify-content-center mt-2">
                        <a type="submit" href="{{route('admin.navidads.crear',$navidad)}}" class="btn btn-danger">Importar Datos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="col-lg-6 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="container" style="position: relative;">
                    <img src="{{asset('images/navidad22.png')}}" style="height: 250px; width: 100%; object-fit: cover;" alt="">
                    <div 
                        class="d-flex justify-content-center mt-2">
                        <a type="submit" href="{{route('admin.mavidads.mirar',$navidad)}}" class="btn btn-danger">Visualizar Datos</a>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <div class="col-lg-4 col-md-4">
        <div class="card">
            <div class="card-body">
                <div class="container" style="position: relative;">
                    <img src="{{asset('images/navidad3.png')}}" alt="">
                    
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-8 col-md-8">
        <div class="card">
            <div class="card-body">
                <div class="container" style="position: relative;">
                    <img src="{{asset('images/navidad4.png')}}" alt="">
                  
                </div>
            </div>
        </div>
    </div>

</div>
@endsection