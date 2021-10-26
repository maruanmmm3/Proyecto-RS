@extends('layouts.app')

@section('contenido')

<div class="row">
    @if ($voluntarios->count())
    <div class="col-lg-6 col-md-6">
        <div class="card">
            <div class="card-body text-center d-flex align-items-center justify-content-center" style="height: 310px;">

                <div class="row">
                    <div class="col-12">
                        <h1 class="fw-bold">{{$horas}}</h1>
                    </div>
                    <div class="col-12 mt-4">
                        <h1>Meta Horas</h1>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @else
    <div class="col-lg-6 col-md-6">
        <div class="card">
            <div class="card-body text-center d-flex align-items-center justify-content-center" style="height: 310px;">

                <div class="row">
                    <div class="col-12">
                        <h1 class="fw-bold"></h1>
                    </div>
                    <div class="col-12 mt-4">
                        <h1>No hay Data</h1>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @endif
    <div class="col-lg-6 col-md-6">
        <div class="card">
            <div class="card-body">
        <a href="{{ route('admin.voluntarios.create') }}" class="btn btn-danger">Crear Voluntariado</a>
            </div>
        </div>
    </div>
</div>

    

    <div class="card">
        <div class="card-body">
            <div class="row">
                @foreach ($voluntarios as $voluntario)

                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="text-center color-gray">
                                {{-- {{ $navidad->nombre }} --}}
                            </div>
                            <div class="card-body">
                                <img src="{{ asset('images/voluntariado.jpg') }}" alt="">
                            </div>
                            <div class="card-body">
                                <a type="submit" href="{{ route('admin.voluntarios.show', $voluntario)}}"
                                    class="btn btn-info text-white">Visualizar</a>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <a type="submit" href="" class="btn btn-danger text-white">Eliminar</a>
                            </div>
                        </div>
                    </div>

                @endforeach

            </div>
        </div>
    </div>

@endsection
