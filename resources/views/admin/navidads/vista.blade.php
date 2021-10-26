@extends('layouts.app')

@section('contenido')

    <div class="d-flex justify-content-left mt-3">
        <a href="{{route('admin.navidads.create')}}" class="btn btn-danger">Crear Campaña</a>
    </div>

    <div class="card mt-3">



        <div class="card-body">
            <div class="row">
                <div class="col-lg-8 col-md-8 mt-3">

                    <img src="{{ asset('images/navidad.png') }}" alt="">

                </div>

               

                <div class="col-lg-4 col-md-4">

                    <div class="container" style="position: relative;">
                        <img src="{{ asset('images/navidad2.jpg') }}" alt="">
                        <div style="position: absolute; bottom: 10px;left: 0; right: 0;opacity: 0.78"
                            class="d-flex justify-content-center">
                            <a href="{{ route('admin.navidads.index') }}" class="btn btn-danger">Campaña Navideña</a>
                        </div>

                    </div>

                </div>


            </div>
        </div>
    </div>

@endsection
