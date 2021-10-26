@extends('layouts.app')

@section('contenido')
<div class="card">
    <div class="card-body">

        {!! Form::open(['route' => 'admin.sembrandos.store']) !!}

            <div class="form-group">
                {!! Form::label('SEMBRANDO VIDAS') !!}
            </div>

            <div class="form-group">
                {!! Form::label('nombre', 'Nombre:') !!}
                {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del Proyecto Sembrando']) !!}

                @error('nombre')
                <span class="text-danger">{{$message}}</span>
                @enderror

            </div>

            <div class="form-group">
                {!! Form::label('descripcion', 'Descripción:') !!}
                {!! Form::textArea('descripcion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la descripción del Proyecto Sembrando']) !!}

                @error('descripcion')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('fecha', 'Fecha:') !!}
                {!! Form::date('fecha', null, ['class' => 'form-control']) !!}

                @error('fecha')
                <span class="text-danger">{{$message}}</span>
                @enderror

            </div>

            {!! Form::submit('Crear Proyecto Sembrando',['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}

    </div>
</div>

@endsection