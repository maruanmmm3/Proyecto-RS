@extends('layouts.app')

@section('contenido')

@if (session('info'))
<div class="alert alert-success">
    <strong>{{session('info')}}</strong>
</div>
@endif

@if (count($orquestas))
Esta Información se mostrara en el inicio
@foreach ($orquestas as $orquestum)
<a type="submit" href="{{route('admin.orquestas.edit',$orquestum)}}" class="btn btn-dark">Editar Orquesta</a>
@endforeach
@else
Crea aqui los datos de la Orquesta sinfonica
    <a type="submit" href="{{route('admin.orquestas.create')}}" class="btn btn-dark">Crea Orquesta</a>
@endif
<br>
<br>
    

    @foreach ($orquestas as $orquesta)
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{asset($orquesta->image->url)}}" class="w-100" style="height:300px" alt="">
                </div>
                <div class="col-md-6">
                   {{$orquesta->descripcion}}
                    
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endsection