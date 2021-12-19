@extends('layouts.app')

@section('contenido')
<div class="card">
    <div class="card-body">

        {!! Form::model($voluntario,['route' => ['admin.voluntarios.update',$voluntario], 'files' => true,'method' => 'put']) !!}
            <div class="form-group">
                {!! Form::label('nombre', 'Nombre:') !!}
                {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el titulo del Voluntariado']) !!}

                @error('nombre')
                <span class="text-danger">{{$message}}</span>    
                @enderror

            </div>

            <div class="form-group">
                {!! Form::label('descripcion', 'Descripcion:') !!}
                {!! Form::textArea('descripcion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la descripción del Voluntariado']) !!}

                @error('descripcion')
                <span class="text-danger">{{$message}}</span>    
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('encargado', 'Encargado:') !!}
                {!! Form::text('encargado', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el encargado del Voluntariado']) !!}

                @error('encargado')
                <span class="text-danger">{{$message}}</span>    
                @enderror

            </div>

            <div class="form-group">
                {!! Form::label('presupuestoesti', 'Presupuesto Estimado:') !!}
                {!! Form::number('presupuestoesti', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el presupuesto estimado']) !!}

                @error('presupuestoesti')
                <span class="text-danger">{{$message}}</span>    
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('ejecucionreal', 'Ejecución Real:') !!}
                {!! Form::number('ejecucionreal', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la ejecución real']) !!}

                @error('ejecucionreal')
                <span class="text-danger">{{$message}}</span>    
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('lugar', 'Lugar:') !!}
                {!! Form::text('lugar', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el lugar']) !!}

                @error('lugar')
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

            <div class="form-group">
                {!! Form::label('hora', 'Horas de Actividad:') !!}
                {!! Form::text('hora', null, ['class' => 'form-control', 'placeholder' => 'Ingrese las horas']) !!}

                @error('hora')
                <span class="text-danger">{{$message}}</span>    
                @enderror

            </div>

            {!! Form::submit('Actualizar Voluntariado',['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}

    </div>
</div>
@endsection