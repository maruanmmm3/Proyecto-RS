@extends('layouts.app')

@section('contenido')
<div class="card">
    <div class="card-body">

        {!! Form::model($promocion,['route' => ['admin.promocions.update', $promocion], 'files' => true, 'method' => 'put']) !!}
            <div class="form-group">
                {!! Form::label('nombre', 'Nombre:') !!}
                {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la Promoción']) !!}

                @error('nombre')
                <span class="text-danger">{{$message}}</span>    
                @enderror

            </div>

            <div class="form-group">
                {!! Form::label('descripcion', 'Descripción:') !!}
                {!! Form::textArea('descripcion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la descripción de la Promoción']) !!}

                @error('proposito')
                <span class="text-danger">{{$message}}</span>    
                @enderror

            </div>

            <div class="row mb-3">

               <div class="col">
                    <div class="image-wrapper">
                    @isset ($promocion->image)
                        <img id="picture" src="{{asset($promocion->image->url)}}">
                    @else
                        <img id="picture" src="https://cdn.pixabay.com/photo/2018/01/17/07/06/laptop-3087585_960_720.jpg" alt="">
                    @endisset
                    </div>
                </div> 

                <div class="col">
                    <div class="form-group">
                        {!! Form::label('file', 'Imagen que se mostrara en la Promoción') !!}
                        {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}

                        @error('file')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <p>Aqui pondremos las indicaciones de la imagen </p>
                </div>

            </div>

            {!! Form::submit('Actualizar Promoción',['class' => 'btn btn-primary']) !!}

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
