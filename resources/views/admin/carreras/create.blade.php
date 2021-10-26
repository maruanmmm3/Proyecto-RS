@extends('layouts.app')

@section('contenido')
<div class="card">
    <div class="card-body">

        {!! Form::open(['route' => 'admin.carreras.store']) !!}
            <div class="form-group">
                {!! Form::label('nombre', 'Nombre:') !!}
                {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la Carrera']) !!}

                @error('nombre')
                <span class="text-danger">{{$message}}</span>    
                @enderror

            </div>


            <div class="form-group">
                {!! Form::label('promocion_id', 'Categoria:') !!}
                {!! Form::select('promocion_id',$promocions, null, ['class' => 'form-control']) !!}

                @error('promocion_id')
                <span class="text-danger">{{$message}}</span>    
                @enderror

            </div>
           
            {{-- {{$promocion}} --}}

            {!! Form::submit('Crear Carrera',['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}

    </div>
</div>
@endsection