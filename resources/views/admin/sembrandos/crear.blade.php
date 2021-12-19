@extends('layouts.app')

@section('contenido')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="col">
                    {!! Form::open(['route' => 'admin.sembrandos.creando']) !!}
                    <div class="form-group">
                        <b>{!! Form::label('SEMBRANDO VIDAS') !!}</b>
                        <div class="col-md-12">
                            {!! Form::label('year', 'Año:') !!}
                            {!! Form::text('year', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el año  del Proyecto']) !!}
                            @error('year')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-md-12 mt-3">
                            {!! Form::label('arbol', 'Arboles:') !!}
                            {!! Form::text('arbol', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la cantidad de arboles']) !!}
                            @error('arbol')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <br>
                    
                        <b>{!! Form::label('VOLUNTARIOS') !!}</b>
                        <div class="col-md-12">
                            {!! Form::label('hombre', 'Varones:') !!}
                            {!! Form::text('hombre', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la cantidad de varones']) !!}
                            @error('hombre')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            {!! Form::label('mujer', 'Mujeres:') !!}
                            {!! Form::text('mujer', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la cantidad de mujeres']) !!}
                            @error('mujer')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-md-12 mt-3">
                            {!! Form::label('area', 'Área:') !!}
                            {!! Form::text('area', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el área que participará']) !!}
                            @error('area')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        <br>
                        <div class="col-md-12 mt-3">
                            {!! Form::text('sembrando_id', $sembrando->id, ['class' => 'form-control','readonly' => 'true']) !!}
                            @error('sembrando_id')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        <br>
                     
                            {!! Form::submit('Crear Beneficiado',['class' => 'btn btn-primary']) !!}

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection