@extends('layouts.app')

@section('contenido')
<div class="card">
    <div class="card-body">

        {!! Form::open(['route' => 'admin.navidads.store']) !!}
            <div class="form-group">
                {!! Form::label('nombre', 'Nombre:') !!}
                {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la Campaña Navideña']) !!}

                @error('nombre')
                <span class="text-danger">{{$message}}</span>    
                @enderror

            </div>

            <div class="form-group">
                {!! Form::label('descripcion', 'Descripcion:') !!}
                {!! Form::textArea('descripcion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el proposito de la Campaña Navideña']) !!}

                @error('descripcion')
                <span class="text-danger">{{$message}}</span>    
                @enderror

            </div>

            <div class="form-group">
                {!! Form::label('fecha', 'Fecha de creaciòn:') !!}
                {!! Form::date('fecha', null, ['class' => 'form-control']) !!}

                @error('fecha')
                <span class="text-danger">{{$message}}</span>    
                @enderror

            </div>

            {!! Form::submit('Crear Campaña Navideña',['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}

    </div>
</div>

@endsection