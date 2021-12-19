@extends('layouts.app')

@section('contenido')
<div class="card">
    <div class="card-body">

        {!! Form::model($proyecto,['route' => ['admin.proyectos.update',$proyecto], 'files' => true,'method' => 'put']) !!}
            <div class="form-group">
                {!! Form::label('nombre', 'Nombre:') !!}
                {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de el Proyecto']) !!}

                @error('nombre')
                <span class="text-danger">{{$message}}</span>    
                @enderror

            </div>

            <div class="form-group">
                {!! Form::label('proposito', 'Proposito:') !!}
                {!! Form::textArea('proposito', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el proposito de el Proyecto']) !!}

                @error('proposito')
                <span class="text-danger">{{$message}}</span>    
                @enderror

            </div>

            <div class="row mb-3">

               <div class="col">
                    <div class="image-wrapper">
                    @isset ($proyecto->image)
                        <img id="picture" src="{{asset($proyecto->image->url)}}">
                    @else
                        <img id="picture" src="https://cdn.pixabay.com/photo/2015/07/17/22/43/student-849825_960_720.jpg" alt="">
                    @endisset
                    </div>
                </div> 

                <div class="col">
                    <div class="form-group">
                        {!! Form::label('file', 'Imagen que se mostrara en el Proyecto') !!}
                        {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}

                        @error('file')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <p>Aqui pondremos las indicaciones de la imagen </p>
                </div>

            </div>

            {!! Form::submit('Actualizar Proyecto',['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}

    </div>
</div>

<script>
    document.getElementById("file").addEventListener('change', cambiarImagen);
   
   function cambiarImagen(event){
       var file = event.target.files[0];
   
       var reader = new FileReader();
       reader.onload = (event) => {
           document.getElementById("picture").setAttribute('src', event.target.result); 
       };
   
       reader.readAsDataURL(file);
   }
   </script>
@endsection